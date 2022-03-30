<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agregar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/img-7.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

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

      <h1 class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" width="56" height="56"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <li><a href="{{ route('mostrar') }}">Clientes</a>
          </li>

          <li><a href="{{ route('mostrar3') }}">Articulos</a>

          </li>

          <li><a>|</a>
          <li><a href="{{ route('logoutad') }}"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
      <h2>Agregar Articulo</h2>
    </div>
    <br>
    <br>

    <center>

      <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/user')}}">

        {{ csrf_field()  }}
        <div class="form-group">
          <label for="upload_file" class="control-label col-sm-3">Upload File</label>
          <div class="col-sm-9">
            <input class="form-control" type="file" name="upload_file" id="upload_file">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-6-offset-2">
            <input type="submit" class="btn btn-primary" value="Save">
          </div>
        </div>
      </form>

      <form name="nuevo" action="{{ route('guardar4') }}" method="GET" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <tr>
          <th><input type='file' name='img' placeholder="Imagen"></th><br><br>
        </tr>
        <table border="1" table class="table table-striped table-hover">
          <center>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Precio</th>
              <th scope="col">Marca</th>
              <th scope="col">Categoria</th>
              <th scope="col">Registrar</th>
            </tr>

            <tr>
              <th>
                <center><input type='text' size="10" name='nombre' placeholder="Nombre"></center>
              </th>
              <th>
                <center><input type='text' size="10" name='des' placeholder="Descripción"></center>
              </th>
              <th>
                <center><input type='text' size="10" name='pre' placeholder="Precio"></center>
              </th>
              <th>
                <center><input type='text' size="10" name='marca' placeholder="MARCA"></center>
              </th>
              <th>
                <center><input type='text' size="10" name='categoria' placeholder=" CATEGORIA"></center>
              </th>
              <th><input type='submit' value="AGREGAR"><br>
            </tr>
          </center>
        </table>
      </form>


    </center>


</body>

</html>