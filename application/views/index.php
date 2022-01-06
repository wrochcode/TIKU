
    <title>Tiket Bioskop UDINUS(TIKU)</title>
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
<main>
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>assets/images/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/images/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/images/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
    <?php function limit_text($text, $limit) {
            if (str_word_count($text, 0) > $limit) {
                $words = str_word_count($text, 2);
                $pos   = array_keys($words);
                $text  = substr($text, 0, $pos[$limit]) . '...';
            }
            return $text;
        }
    ?>
    <div class="album py-5 bg-light">
        <div class="container">
        <div class="d-flex justify-content-center m-3"><h3>Tayang Hari ini</h3></div>
        <hr>
        <!-- <?php var_dump($data); ?> -->
        <!--Buat Form-->
        <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/jadwal">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($data as $film)
            {?>
            <div class="col">
                <!-- <img src="<?php echo base_url(); ?>assets/images/poster/<?php echo $f['foto'];?>.jpg" alt="" class="bd-placeholder-img card-img-top"> -->
                <img class="bd-placeholder-img card-img-top" src="<?php echo base_url(); ?>assets/images/<?php echo $film['foto']; ?>">
                <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <div class="card-body">
                    <div class="row">
                        <b>
                        <p class="card-text"><?php  echo $film['judul']; ?>.</p>
                        </b>
                    </div>
                    <p class="card-text"><?php echo limit_text($film['sinopsis'], 7);; ?>.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group w-50 mx-3">
                            <button name="id_film" value="<?php echo $film['id_film'];?>" type="submit" class="btn"> Pesan </button>
                        </div>
                        <small class="text-muted mx-2"><?php echo $film['keterangan']; ?></small>
                    </div>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>
        </form>
        </div>
    </div>    
    

