<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Articulos</title>
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

      <h1 class="logo"><a href=" {{ route ('validar' ) }}"><img src="assets/img/logo.png" alt="" width="58" height="58"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
              <li ><a href="{{ route('mostrar') }}">Articulos</a></li>

              <li ><a href="{{ route('mostrar2') }}">Administradores</a></li>

              <li><a>|</a>
              <li><a href="{{ route('logoutad') }}"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
  <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
  <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
</svg></a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </header><!-- End Header -->

 
  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
     <h2>Articulos Productos</h2>
    </div>
    

    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{{ route('agregar3') }}">Agregar<img src="assets/img/pa.png" alt="" width="50" height="50"></a></h1>
     <br>
     <center>
     <table border="1" table class="table table-striped table-hover">
        <tr>
<td style = "text-align:center;" ><p style="color:black">&nbsp;&nbsp;ID&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imagen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripción&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categoria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;Editar&nbsp;&nbsp;</p></td>
<td style = "text-align:center;"><p style="color:black">&nbsp;&nbsp;Borrar&nbsp;&nbsp;</p></td>
	</tr>


  <tr>
@foreach($articulo as $articulo)
<td >&nbsp;&nbsp;{{ $articulo->id_articulo }}</td>
<td style = "text-align:center;">&nbsp;&nbsp;<img src="{{ asset('img/'.$articulo->img) }}" alt="{{$articulo->img}}" width="80" height="70">&nbsp;&nbsp;</td>
<td >&nbsp;&nbsp;{{ $articulo->nombre }} &nbsp;&nbsp;</td>
<td style = "text-align:center;">&nbsp;{{ $articulo->des }}&nbsp;&nbsp;</td>
<td >&nbsp;&nbsp;$ {{ $articulo->pre }} MXN </td>
<td style = "text-align:center;">{{ $articulo->tipo }}</td>
<td style = "text-align:center;">{{ $articulo->marca }}</td>
<td style = "text-align:center;">&nbsp;{{ $articulo->categoria }}&nbsp;</td>
<td style = "text-align:center;" ><a href="{{ route('editar3', ['id' => $articulo->id_articulo]) }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>

<td style = "text-align:center;" ><form action ="{{ route('borrar3', ['id' => $articulo->id_articulo]) }}" method="POST" name="borrar">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="submit" value="Borrar">
    </form></td>

	</tr>
@endforeach
	</table></center>
	


    
</body>

</html>