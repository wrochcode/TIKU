





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
    <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/pesankursi"> -->
    <div class="container my-lg-5">
        <center><h2 class="fs-1 mb-3">Pesan Film: <?php echo $data['film'][0]['judul']; ?></h2></center>
        <div class="card">
            <div class="row no-gutter">
                <div class="col-md-3">
                    <img class="card-img" src="<?php echo base_url(); ?>assets/images/<?php echo $data['film'][0]['foto']; ?>">
                    <!-- <img src="<?php echo base_url(); ?>assets/images/poster/<?php echo $f['foto']; ?>.jpg" class="card-img" alt="Udinus"> -->
                </div>
                <div class="col-md-9  pt-lg-5">
                    <h1 class="card-title fs-3 mb-3"><?php echo $data['film'][0]['judul']; ?></h1>
                    <p class="card-text "><?php echo $data['film'][0]['sinopsis']; ?></p>
                    <p class="card-text text-muted">Tanggal rilis: <?php echo $data['film'][0]['keterangan']; ?></p>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="container">
        <input type="hidden" id="custId" name="nama" value="<?php echo $data['film'][0]['judul']; ?>">
        <div class="row">
            <div class="col-2">
                <b>Pilih Tanggal Pemesanan</b>
            </div>
            <div class="col-10">
                <div class="form-check form-check-inline">
                    <input type="date" name="tanggal_nonton" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <b>Pilih Waktu penayangan</b>
            </div>
            <div class="col-10">
                <div class="form-check form-check-inline">
                    <?php $no=1;
                    foreach ($data['jadwal'] as $jdw){ ?>
                    <input type="radio" id="<?php echo $no; ?>" name="jadwal" value="<?php echo $jdw['id_jadwal']; ?>" required>
                    <label for="<?php echo $no; ?>"><?php echo $jdw['jadwal']; ?></label>
                    <?php $no++; } ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Pesan</button>
        
      </form>
    </div>