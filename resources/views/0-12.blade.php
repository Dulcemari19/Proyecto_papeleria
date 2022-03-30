<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Articulos | Papeleria </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="assets/img/img-7.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
      padding: 20px
    }
  </style>
  <!-- =======================================================
  * Template Name: Gp - v2.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><img src="assets/img/logo.png" alt="" width="58" height="58"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <li><a>Bienvenido</a>
          <li><a>|</a>
          <li><a href="{{ route('logout') }}"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z" />
                <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z" />
              </svg></a></li>


        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->


  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
      <h2>Articulos | Papeleria </h2>

    </div>
    <br>
    <center>
      <h4><a href="{{ $articulos->previousPageUrl() }}"><img src="assets/img/fl1.png" style="width:5%"> </a>
        || {{ $articulos->currentPage() }} ||
        <a href="{{ $articulos->nextPageUrl() }}"><img src="assets/img/fl2.png" style="width:5%">
      </h4>
    </center>
    <br>

    <!-- ======= tabla de precios ======= -->

    

        <!-- !PAGE CONTENT! -->
       <center>
        <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

          <!-- First Photo Grid-->
          <div class="w3-row-padding w3-padding-16 w3-center" id="food">
            <div class="w3-quarter">
              <img src="assets/img/libretas.jpg.crdownload" alt="Sandwich" style="width:40%">
              <h3>Libretas</h3> 
            </div>
            <div class="w3-quarter">
              <img src="assets/img/post.jpg" alt="Steak" style="width:40%">
              <h3>Post it </h3>
            </div>
            <div class="w3-quarter">
              <img src="assets/img/carpetas.png" alt="Cherries" style="width:40%">
              <h3>Carpetas</h3>

            </div>
            <div class="w3-quarter">
              <img src="assets/img/borradores.jpg" alt="Pasta and Wine" style="width:40%">
              <h3>Borradores</h3>
            </div>
          </div>

          <!-- Second Photo Grid-->
          <div class="w3-row-padding w3-padding-16 w3-center">
            <div class="w3-quarter">
              <img src="assets/img/lapiceros.jpg" alt="Popsicle" style="width:40%">
              <h3>Lapiceros</h3>
            </div>
            <div class="w3-quarter">
              <img src="assets/img/lapiceros.jpg" alt="Salmon" style="width:40%">
              <h3>Hojas de color</h3>
            </div>
            <div class="w3-quarter">
              <img src="assets/img/hblancas.jpg" alt="Sandwich" style="width:40%">
              <h3>Hojas blancas</h3>
            </div>
            <div class="w3-quarter">
              <img src="assets/img/colores.jpg" alt="Croissant" style="width:40%">
              <h3>Colores</h3>
            </div>

            <div class="w3-row-padding w3-padding-16 w3-center">
            <div class="w3-quarter">
              <img src="assets/img/foami.jpg" alt="Popsicle" style="width:40%">
              <h3>foami</h3>
            </div>
            <div class="w3-quarter">
              <img src="assets/img/pizarron.jpg" alt="Salmon" style="width:40%">
              <h3>Marcadores de pizarron</h3>
            </div>
            <div class="w3-quarter">
              <img src="/assets/img/brillantina.jpg" alt="Sandwich" style="width:40%">
              <h3>Brillantina</h3>
            </div>
            <div class="w3-quarter">
              <img src="assets/img/plumones.jpg" alt="Croissant" style="width:40%">
              <h3>Plumones</h3>
            </div>
          </div>
          </center>
          <!-- Pagination -->
          <div class="w3-center w3-padding-32">
            <div class="w3-bar">
              <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
              <a href="#" class="w3-bar-item w3-black w3-button">1</a>
              <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
              <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
              <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
              <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
          </div>

          <hr id="about">
</body>

</html>