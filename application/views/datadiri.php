
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
    <div class="row my-lg-5">

    </div>
    <div class="row my-lg-5">

    </div>
    <div class="container my-lg-5">
        <h2 align="center">Data Diri</h2>      
        <form id="pesan" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/welcometiku/data_diri">
        <fieldset>
            <div class="row my-3">
                <div class="col-2">
                    <b>NIK</b>
                </div>
                <div class="col-10">
                    <div class="form-check form-check-inline">
                        <input type="text" name="nik" placeholder="Masukkan NIK" required/>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-2">
                    <b>Nama</b>
                </div>
                <div class="col-10">
                    <div class="form-check form-check-inline">
                        <input type="text" name="nama" placeholder="Masukkan Nama" required/>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-2">
                    <b>Usia</b>
                </div>
                <div class="col-10">
                    <div class="form-check form-check-inline">
                        <input type="text" name="usia" placeholder="Masukkan Usia" required/>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Cetak Tiket</button>
      </form>
        
    </div>
    <div class="row my-lg-5">

    </div>
    <div class="row my-lg-5">

    </div>
    <div class="row my-lg-5">

    </div>
    <div class="row my-lg-5">

    </div>
    </div>