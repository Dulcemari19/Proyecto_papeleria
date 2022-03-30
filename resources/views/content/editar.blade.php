<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Editar</title>
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

      <h1 class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" width="58" height="58"></h1>
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
        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->


  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
      <h2>Editar</h2>
      <br>
      <img src="{{ asset('assets/img/curriculum.png') }}" alt="" width="70" height="70">
    </div>
    <br>
    <br>

    <center>

      <form name="nuevo" action="{{ route('salvar', ['id' => $usu->id_usuario]) }}" method="GET">
        {{ csrf_field() }}
        {{ method_field('GET') }}
        <table border="1" table class="table table-striped table-hover">
          <tr>
            <th scope="col" style="text-align:center;">Nombre</th>
            <th scope="col" style="text-align:center;">Apellidos</th>
            <th scope="col" style="text-align:center;">Dirección</th>
            <th scope="col" style="text-align:center;">Telefono</th>
            <th scope="col" style="text-align:center;">Email</th>
            <th scope="col" style="text-align:center;">Contraseña</th>
            <th scope="col" style="text-align:center;">Registro&nbsp;<img src="{{ asset('assets/img/guardar.png') }}" alt="" width="30" height="30"></th>
          </tr>

          <td>
            <center> <input type='text' size="10" name='nombre' placeholder="Nombre" value="{{ $usu->nombre }}"></center>
          </td>
          <td>
            <center> <input type='text' size="10" name='apellidos' placeholder="Apellidos" value="{{ $usu->apellidos }}"></center>
          </td>
          <td>
            <center> <input type='text' size="10" name='direc' placeholder="Dirrección" value="{{ $usu->direc }}"></center>
          </td>
          <td>
            <center> <input type='text' size="10" name='tel' placeholder="Teléfono" value="{{ $usu->tel }}"></center>
          </td>
          <td>
            <center> <input type='text' size="23" name='email' placeholder="Ingresa tu correo" value="{{ $usu->email }}"></center>
          </td>
          <td>
            <center> <input type='text' size="15" name='pass' placeholder="Ingresa tu contraseña" value="{{ $usu->pass }}"></center>
          </td>
          <td>
            <center> <input type='submit' size="10" value="Guardar"></center>
          </td><br>
          <br><br>
      </form>
      </table>
    </center>


</body>

</html>