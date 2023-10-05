<?php
session_start();
ob_start();
include 'config.php';
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    echo "<p align='center'>Anda Harus Login Terlebih dahulu!</p>";
    echo "<meta http-equiv='refresh' content='2;url=login.php'>";
} else {
    define('INDEX', true);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <title>Rumah Sakit Kita</title>

    <!-- My CSS -->
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Rumah Sakit Kita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#carousel">Service</a>
            <a class="nav-item nav-link" href="?hal=pasien#foods">Patient</a>
            <a class="nav-item nav-link" href="#testimony">Testimony</a>
            <a class="nav-item nav-link" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navigasi -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Together we <span>thrive</span> <br> <span>hope</span> in every heartbeat</h1>
        <a class="nav-item btn btn-primary tombol" href="?hal=pasien#foods">Our Patient</a>
      </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- container -->
    <div class="container">
     <!-- info panel -->
     <div class="row justify-content-center">
      <div class="col-lg-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="img\image2.jpg " alt="Pengiriman Cepat" class="float-left">
            <h4>Pelayanan Cepat</h4>
            <p>Melayani pasien tepat waktu</p>
          </div>
          <div class="col-lg">
            <img src="img\image1.png" alt="24 Hours" class="float-left">
            <h4>24 Hours</h4>
            <p>Kami melayani selama 24 jam.</p>
          </div>
          <div class="col-lg">
            <img src="img\image3.jpg" alt="Terpercaya" class="float-left">
            <h4>Terpercaya</h4>
            <p>Kami memberikan pelayanan terbaik dan dapat diandalkan</p>
          </div>
        </div>
      </div>
     </div>
    </div>
     <!-- akhir info panel -->

     <!-- Carousel -->
     <div id="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/layanan1.jpg" class="d-block w-100" alt="Medical Check Up">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Medical Check Up</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/layanan2.jpg" class="d-block w-100" alt="Surgery">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Surgery</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/layanan3.jpg" class="d-block w-100" alt="Laboratory">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Laboratory</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/layanan4.jpg" class="d-block w-100" alt="GEmergency Unit">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Emergency Unit</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <div class="nav-icon">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </div>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <div class="nav-icon">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </div>
          </button>
        </div>
      </div>
      <!-- Akhir Carousel -->

    <section class="main">
      <?php
      include 'konten.php';
      ?>
    </section>
    

    <!-- Testimonial -->
    <br><br><br><br>
    <div id="testimony">
      <section class="testimonial">
        
        <div class="judul-card">
          <h1 class="display-4 text-center font-weight-normal">Testimony</h1>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h5>"Saya ingin berterima kasih kepada tim medis dan staf Rumah Sakit XYZ atas perawatan luar biasa yang saya terima. Saya datang ke sini dalam kondisi yang sangat buruk, tetapi berkat perhatian dan keahlian mereka, saya pulih sepenuhnya. "</h5>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8 justify-content-center d-flex">
            <figure class="figure">
              <img src="img/people1.jpg" class="figure-img img-fluid rounded-circle" alt="Adit">
            </figure>
            <figure class="figure">
              <img src="img/people2.jpg" class="figure-img img-fluid rounded-circle utama" alt="Cantika Febiola">
              <figcaption class="figure-caption">
                <h5>Cantika Febiola</h5>
                <p>CEO Warung Kita</p>
              </figcaption>
            </figure>
            <figure class="figure">
              <img src="img/people3.jpg" class="figure-img img-fluid rounded-circle" alt="jarwo">
            </figure>
          </div>
        </div>
      </section>
    </div>
    <!-- Akhir Testimonial -->

    <!-- Footer -->
    <div class="row footer">
      <div class="col text-center">
        <p>2023 All Rights Reserved by Rumah Sakit Kita</p>
      </div>
    </div>
    <!-- Akhir Footer -->

    <!-- akhir container -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>