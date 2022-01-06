
    <title>TIKU | Tiketku</title>
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
        <center><h2 class="fs-3 mb-3">Tiket Film Anda</h2></center>
        <div class="row d-flex justify-content-center" id="#printform">
            <div class="card col-3 m-3">
                <div class="row no-gutter">
                    <?php foreach($data['kursi'] as $kursi){?>
                    <div class="card-title pt-4 px-5 text-center"><h5><b>Tiket Bioskop Kampus UDINUS(TIKU)</b></h3></div><hr>
                    <div class="px-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p class="card-title fs-4"><?php echo $this->session->userdata('judul'); ?><p>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text fs-5"><?php $tn = $this->session->userdata('tanggal_nonton'); echo date('l',strtotime($tn)).",".$tn."/ ".$this->session->userdata('jadwal');?> </p>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text fs-5"><?php echo $kursi ?></p>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text fs-5">Lunas - Website</p>
                            </li>
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        Tiket Bioskop Udinus <br><?php echo $this->session->userdata('judul'); ?> - <?php $tn = $this->session->userdata('tanggal_nonton'); echo date('l',strtotime($tn)).",".$tn."/ ".$this->session->userdata('jadwal');?> <br> <b>Disobek Petugas</b>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a id="download" class="btn btn-success my-4" onclick="print()">Print Tiketku</a>
        </div>
        <br><br>

        <script>
            $("#download").on('click', function(){
                html2canvas($("#printform"), {
                    onrendered: function (canvas) {
                        var url = canvas.toDataURL();

                        var triggerDownload = $("<a>").attr("href", url).attr("download", getNowFormatDate()+"电子签名详细信息.jpeg").appendTo("body");
                        triggerDownload[0].click();
                        triggerDownload.remove();
                    }
                });
            })
        </script>
        <!-- <script>
            function photo() 
                {
                    html2canvas($('#printIndong'), {
                        
                    onrendered: function(canvas) {

                        var imgData = canvas.toDataURL("image/jpeg");
                        var pdf = new jsPDF();
                        pdf.addImage(imgData, 'JPEG', 0, 0, -180, -180);
                        pdf.save("download.jpg");
                    }
                    });

                }
	    </script> -->
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </div>
    </div>