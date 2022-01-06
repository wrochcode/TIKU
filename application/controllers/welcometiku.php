<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcometiku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        //ambil data lalu simpan di var data
        $data=$this->mymodel-> Get ("film");
        $data= array('data' => $data);
        //var data diubah menjadi var tipe data
		$this->load->view('index', $data);
        $this->load->view('template/header');
		$this->load->view('template/footer');
    }
    public function jadwal()
	{
        $id_film=$_POST['id_film'];
		$data['film']=$this->mymodel-> GetWhere('film', array('id_film' => $id_film));
        $judul = $data['film'][0]['judul'];
        $this->session->set_userdata('judul', $judul);
        $this->session->set_userdata('id_film', $id_film);
        $data['jadwal'] = $this->mymodel->Get('jadwal');
        $data = array('data' => $data);
        $this->load->view('jadwal', $data);
        $this->load->view('template/header');
		$this->load->view('template/footer');
    }
    public function pesankursi()
	{
        $tanggal_nonton= $_POST['tanggal_nonton'];
        $id_jadwal= $_POST['jadwal'];
        $this->session->set_userdata('tanggal_nonton', $tanggal_nonton);
        $this->session->set_userdata('id_jadwal', $id_jadwal);
        $data['jadwal'] = $this->mymodel->GetWhere('jadwal', array('id_jadwal' => $id_jadwal));
        $jadwal= $data['jadwal'][0]['jadwal'];
        $this->session->set_userdata('jadwal', $jadwal);
        $data['kursi'] = $this->mymodel->Get('kursi');
        $id_film= $this->session->userdata('id_film');
        $query_kursi_booked = $this->db->query('SELECT nokur FROM pesanan where id_film = "'.$id_film.'" and id_jadwal="'.$id_jadwal.'" and tanggal_nonton="'.$tanggal_nonton.'"');
        $data['kursi_booked'] = $query_kursi_booked->result_array();
        $data = array('data' => $data);
		$this->load->view('pesankursi', $data);
        $this->load->view('template/header');
		$this->load->view('template/footer');
    }
    public function pesanan()
	{
        if(!empty($_POST['pilihkursi'])){
            $kursi= $_POST['pilihkursi'];
            $this->session->set_userdata('kursi', $kursi);
            $data['kursi']= $kursi;
        }
        else{
            $data['kursi']=[];
        }
        $data = array('data' => $data);
        $this->load->view('template/header');
		$this->load->view('pesanan', $data);
		$this->load->view('template/footer');
    }
    function hapuskursi($no){
        //memasukan session (kursi) pada $listkursi
        $listkursi = $this->session->userdata('kursi');
        //Memghapus kursi
        unset($listkursi[$no]);
        ///memsaukan sisa kursi
        $data['kursi'] = array_values($listkursi);
        ////mengurutkan index
        $kursi = $data['kursi'];
        //set session dengan data kursi
        $this->session->set_userdata('kursi',$kursi);
        ///simpan semua data dalam variable array data
        $data= array('data'=>$data);
        $this->load->view('pesanan',$data);
        $this->load->view('template/header');
		$this->load->view('template/footer');
    }
    function edit(){
        $listkursi = $this->session->userdata('kursi');
        $kursi = array_values($listkursi);
        //masukan masing masing variable kedalam session nya
        $id_film = $this->session->userdata('id_film');
        $id_jadwal = $this->session->userdata('id_jadwal');
        $tanggal_nonton = $this->session->userdata('tanggal_nonton');
        ///ambil semua data film
        $data['film']=$this->mymodel->getWhere('film',array('id_film'=>$id_film));
        ///ambil semua data kursi
        $data['kursi']=$this->mymodel->get('kursi');
        ///ambil data kursi yg terpilih sebelumnya
        $data['kursi_checked'] = $kursi;
        ///ambil terbooking
        $query_kursi_booked = $this->db->query('SELECT nokur FROM pesanan where id_film="'.$id_film.'" and id_jadwal="'.$id_jadwal.'" and tanggal_nonton="'.$tanggal_nonton.'"');
        $data['kursi_booked'] = $query_kursi_booked->result_array();
        $data=array('data'=>$data);
        $this->load->view('edit',$data);
        $this->load->view('template/header');
		$this->load->view('template/footer');
    }
    function data_diri(){
        $nik=isset($_POST['nik']);
        $nama=isset($_POST['nama']);
        $usia=isset($_POST['usia']);
        if($nik && $nama && $usia ==true){
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $usia = $_POST['usia'];
            $data_identitas = array(
                'nik'=>$nik,
                'nama'=>$nama,
                'usia'=>$usia
            );
            $this->session->set_userdata('identitas',$data_identitas);
            $this->mymodel->insert('identitas',$data_identitas);
            redirect('welcometiku/cetaktiket');
        }
        else
        {
            $this->load->view('datadiri');
        }
        
        $this->load->view('template/header');
		$this->load->view('template/footer');
    }
    public function cetaktiket()
	{
        $listkursi = $this->session->userdata('kursi');
        $data['kursi']=array_values($listkursi);
        //hitung isi data kursi
        $jum_kursi = count($data['kursi']);
        $j=0;
        //insert data kursi ke database
        foreach($data['kursi'] as $k){
            $data_insert = array(
                'id_film'=>$this->session->userdata('id_film'),
                'tanggal_nonton'=>$this->session->userdata('tanggal_nonton'),
                'id_jadwal'=>$this->session->userdata('id_jadwal'),
                'nokur'=>$k
            );
            $this->mymodel->insert('pesanan',$data_insert);
        }
        ///simpan semua data kedalam array
        $data = array('data'=>$data);
        $this->load->view('cetaktiket',$data);
        $this->load->view('template/header');
		$this->load->view('template/footer');
    }
    public function tentang_tiku()
	{
		$this->load->view('tentang_kami');
		$this->load->view('template/header');
		$this->load->view('template/footer');
	}
}
