

  <style>
    .text-center {
            text-align: center;
        }
        input[type=checkbox]{
            width: 25px;
            margin: 20px;
            cursor: pointer;
        }
        input[type=checkbox]:before {
            content: "";
            width: 50px;
            height: 50px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            border: 3px solid #f26419;
            background-color: #f6ae2d;
        }
        input[type=checkbox]:checked:before{
            background-color: #8ac926;
        }
        input[type=checkbox]:disabled:before{
            background-color: red;
        }
  </style>
    <title>TIKU</title>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container mt-3">
      <a class="navbar-brand" href="#">TIKU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcomeTiku/tentang_tiku">Tentang TIKU</a>
          </li>
        </ul>
        <form class="d-flex">
          <div class="px-4">
            <button class="btn btn-outline-success me-3" type="submit">Masuk</button>
            <button class="btn btn-outline-success" type="submit">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </nav>
</header>

<br>
<main>
    <div class="container my-lg-5">
        <center><h2 class="fs-1 mb-3">Pilih kursi</h2></center>
      </div>
    </div>

    <div class="container">
        <form id="pesan" class="form-horizontal" method="post" action="<?php echo base_url('index.php/welcometiku/pesanan') ?>">
        <div class="row">
            <div class="col-2">
                <p><b>Film:</b>
            </div>
            <div class="col-10">
                <div class="form-check form-check-inline">
                    <?php echo $this->session->userdata('judul') ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p><b>Tanggal:</b>
            </div>
            <div class="col-10">
                <div class="form-check form-check-inline">
                <?php $tn=$this->session->userdata("tanggal_nonton"); echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <b>Pilih tempat duduk</b>
            </div>
            <div class="seatStrucktur text-center col-10">
                <table id="seatsBlock">
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <?php
                        $k=0;
                        for($i='A'; $i<='E'; $i++){?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <?php for($j=1; $j<=4; $j++){
                                    $ij=$data['kursi'][$k]['nokur'];
                                ?>
                                <td>
                                    <input type="checkbox" name="pilihkursi[]" value="<?php echo $ij; ?>"
                                    <?php foreach($data['kursi_checked'] as $kursi){
                                        if($ij==$kursi)
                                            echo "checked";
                                    }

                                    for($x=0; $x<count($data['kursi_booked']); $x++){
                                        if($ij==$data['kursi_booked'][$x]['nokur']){
                                            echo "disabled";
                                        }
                                    }?>
                                </td>
                                <?php $k++; } ?>
                            </tr>
                        <?php } ?>    
                    </tr>
                </table>
            </div>
        </div>
        <br><br>
        <div class="row mb-5">
              <div class="col-2">
              </div>
              <div class="col-10">
                  <button class="btn btn-primary" type="submit">Ubah</button>
              </div>
        </div>
      </form>
    </div>