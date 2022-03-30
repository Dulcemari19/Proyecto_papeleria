<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Categorías / Juegos y pluzzes</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

      <h1 class="logo"><a href=" {{ route ('secunda' ) }}"><img src="assets/img/logo.png" alt="" width="120" height="80"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li><a href=" {{ route ('categorias' ) }}"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.646 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
          </svg></a></li>
         
          <li class="drop-down"><a href="{{ route ('categorias' ) }}">Categorías</a>
                <ul>
                  <li><a href=" {{ route ('aire' ) }}">Aire libre</a></li>
                  <li><a href=" {{ route ('ju' ) }}">Juegos y pluzzes</a></li>
                  <li><a href=" {{ route ('pri' ) }}">Primera infancia (hasta 3 años)</a></li>
                  <li><a href=" {{ route ('mu' ) }}">Muñecas y figuras de acción</a></li>
                  <li><a href=" {{ route ('blo' ) }}">Juegos de construcción y bloques</a></li>
                  <li><a href=" {{ route ('im' ) }}">Imitación hogar y entorno</a></li>
                  <li><a href=" {{ route ('ot' ) }}">Otros juguetes</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href=" {{ route ('edad' ) }}">Edad</a>
                <ul>
                  <li><a href=" {{ route ('cero' ) }}">0 - 12  meses</a></li>
                  <li><a href=" {{ route ('dos' ) }}">2 - 3  años</a></li>
                  <li><a href=" {{ route ('cuatro' ) }}">4 - 5  años</a></li>
                  <li><a href=" {{ route ('seis' ) }}">6 - 7  años</a></li>
                  <li><a href=" {{ route ('ocho' ) }}">8 - 10  años</a></li>
                  <li><a href=" {{ route ('once' ) }}">11 - 14  años</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href=" {{ route ('marcas' ) }}">Marcas</a>
                <ul>
                  <li><a href=" {{ route ('b' ) }}">BABY BORN</a></li>
                  <li><a href=" {{ route ('F' ) }}">FISHER-PRICE</a></li>
                  <li><a href=" {{ route ('c' ) }}">CHICCO</a></li>
                  <li><a href=" {{ route ('m' ) }}">MATEL</a></li>
                  <li><a href=" {{ route ('n' ) }}">NERF</a></li>
                  <li><a href=" {{ route ('t' ) }}">TWINA</a></li>
                </ul>
              </li>

              <li><a>|</a>
              <li><a href="SESIONES.php"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
     <h2>Juegos y pluzzes</h2>
     <hr>
    </div>
    <br>
     <br>
  
         <!-- ======= tabla de precios ======= -->
      <div id="tabla-precios">

        <div id="tabla-precios">

            <div class="precio-col">
             <div class="precio-col-header">
             <h3>100 MXN</h3>
                <p>Tablero didáctico / HASBRO</p>
           </div>
          
          <div class="precio-col-features">
            <center><img src="assets/img/edad/e30.jpg" alt="" width="180" height="180"></center>
           <p>Con más de 20 juegos de mesa</p>
           <p>Juego para desarrollar el aprendizaje</p>
           </div>

            
             </div>
            
            <div class="precio-col">
             <div class="precio-col-header">
                <h3>120 MXN</h3>
                <p>Chess-mon / NATUR-PLAY</p>
                </div>
               
               <div class="precio-col-features">
                 <center><img src="assets/img/edad/e31.jpg" alt="" width="180" height="180"></center>
                   <p>Tablero de ajedrez con luces</p>
                   <p>Desarrollo de aptitudes mentales</p>
                </div>
            
             </div>
            
            <div class="precio-col">
             <div class="precio-col-header">
                <h3>90 MXN</h3>
         <p> Pluzze Universe / TWINA </p>
         </div>
        
        <div class="precio-col-features">
          <center><img src="assets/img/edad/e38.jpg" alt="" width="180" height="180"></center>
         <p>Incluye 500 piezas</p>
         <p> Para tu destreza mental </p>
         </div>
               
            
           
             </div>
            </div>
    
            <div id="tabla-precios">
    
              <div class="precio-col">
               <div class="precio-col-header">
                <h3>60 MXN</h3>
         <p> Monopoli "Fornite" / MONOPOLI</p>
         </div>
        
        <div class="precio-col-features">
          <center><img src="assets/img/edad/e39.jpg" alt="" width="215" height="180"></center>
         <p>Fornite versión capítulo 2 </p>
         <p>Incluye muñequitos con skin populares</p>
         </div>
              
             
               </div>
              
              <div class="precio-col">
               <div class="precio-col-header">
                <h3>116 MXN</h3>
           <p>Scrabble / HASBRO </p>
           </div>
          
          <div class="precio-col-features">
            <center><img src="assets/img/edad/e40.jpg" alt="" width="210" height="180"></center>
              <p> Comntiene todo el abecedario</p>
              <p> Apto para toda la familia</p>
           </div>
              
            
               </div>
              
              <div class="precio-col">
               <div class="precio-col-header">
                <h3>90 MXN</h3>
           <p> Pluzze princes / DISNEY </p>
           </div>
          
          <div class="precio-col-features">
            <center><img src="assets/img/edad/e41.jpg" alt="" width="180" height="180"></center>
           <p>Tiene mas de 300 piezas </p>
           <p>Todas tus princesas favoritas</p>
           </div>
            
               </div>
              </div>
    
              <div id="tabla-precios">

                <div class="precio-col">
                 <div class="precio-col-header">
                  <h3>80 MXN</h3>
                 <p>Party / IMAGINEXT</p>
                 </div>
                
                <div class="precio-col-features">
                  <center><img src="assets/img/edad/e46.jpg" alt="" width="180" height="180"></center>
                 <p>Desarrolla tu imaginación</p>
                 <p>Te divertirás, con más de 69 preguntas para tí y tús amigos </p>
                 </div>
                
               
                 </div>
                
                <div class="precio-col">
                 <div class="precio-col-header">
                  <h3>98 MXN</h3>
                  <p> Trivial / HASBRO</p>
                  </div>
                 
                 <div class="precio-col-features">
                   <center><img src="assets/img/edad/e47.jpg" alt="" width="215" height="180"></center>
                  <p>Tablero con 50 retos </p>
                  <p>Juego de mesa con diferentes modalidades </p>
                  </div>
                
               
                 </div>
                
                <div class="precio-col">
                 <div class="precio-col-header">
                  <h3>150 MXN</h3>
                  <p>Jardín de las delicias/ TWINA</p>
                  </div>
                 
                 <div class="precio-col-features">
                   <center><img src="assets/img/edad/e48.jpg" alt="" width="210" height="180"></center>
                     <p> Rompecabezas con 2000 piezas</p>
                     <p> Te ayuda a trabajar con la motricidad</p>
                  </div>
                
                
                 </div>
                </div>

                <div id="tabla-precios">

                    <div class="precio-col">
                     <div class="precio-col-header">
                     <h3>120 MXN</h3>
                     <p>Juego de troles/ TWINA</p>
                     </div>
                    
                    <div class="precio-col-features">
                      <center><img src="assets/img/edad/e49.jpg" alt="" width="210" height="180"></center>
                        <p> Bromas para toda la famila</p>
                        <p> Te ayuda a trabajar con la motricidad</p>
                     </div>
                    
                 
                     </div>
                    
                    <div class="precio-col">
                     <div class="precio-col-header">
                        <h3>126 MXN</h3>
                        <p> Party 3 / IMAGINEXT</p>
                        </div>
                       
                       <div class="precio-col-features">
                         <center><img src="assets/img/edad/e54.jpg" alt="" width="180" height="180"></center>
                        <p>Retos más extremos y troleos</p>
                        <p>Ideal para todos</p>
                        </div>
                    
                    
                     </div>
                    
                    <div class="precio-col">
                     <div class="precio-col-header">
                     <h3>76 MXN</h3>
                     <p>Party 2/ IMAGINEXT/p>
                     </div>
                    
                    <div class="precio-col-features">
                      <center><img src="assets/img/edad/e51.jpg" alt="" width="210" height="180"></center>
                     <p>Tablero con 50 retos </p>
                     <p>Juego de mesa con diferentes modalidades </p>
                     </div>
                    
                    
                     </div>
                    </div>
                    <div id="tabla-precios">

<div class="precio-col">
 </div>

<div class="precio-col">
<br>
<div class="precio-col-comprar">
  <a href="productos.php">Agregar</a>
 </div>
 </div>
                  
        </body>
        </html>
              