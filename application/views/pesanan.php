

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
        <center><h2 class="fs-1 mb-3">Detail Pesanan</h2></center>
        <form id="pesan" class="form-horizontal mb-lg-5" method="post" action="<?php echo base_url(); ?>index.php/WelcomeTiku/editpesanan">
            <div class="card">
                <div class="row">
                    <div class="pt-lg-5 px-4">
                        <div class="row">
                            <h1 class="card-title fs-3 mb-0"><?php echo $this->session->userdata("judul"); ?></h1>
                        </div>
                        <div class="card-title fs-5 mb-3"><p><?php $tn=$this->session->userdata("tanggal_nonton"); echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?></div>
                            <ul>
                                <?php $i=0;foreach($data['kursi'] as $kursi){?>
                                <li>
                                    <form method="POST" action="<?php echo base_url()."index.php/welcometiku/hapuskursi/$i"; ?>">
                                            <?php echo $kursi;?>
                                    <button type="submit" name="Submit" class="btn hapus">Hapus </button>
                                    </form>
                                </li>
                                <?php $i++;}?>
                            </ul>
                            <hr width="25%" align="left">
                            <p>Total : <?php echo number_format(count($data['kursi'])*60000,2,',','.');?></p>
                            <hr width="25%" align="left">
                            <form method="POST" action="<?php echo base_url()."index.php/welcometiku/edit"; ?>">
                                <button type="submit" name="submit" class="btn edit">Edit Kursi </button>
                            </form>
                            <form method="POST" action="<?php echo base_url(); ?>">
                                <button type="submit" name="submit" class="btn hapus">Hapus Semua </button>
                            </form>
                            <br>
                            <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/data_diri">
                                <button type="submit" name="submit" class="btn">Bayar</button>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>  
            </div>
        </form>
      </div>
    </div>