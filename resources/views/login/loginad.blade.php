<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('assets/img/img-7.jpg') }}" rel="icon">
    <link rel="stylesheet" href="inicio/assets/css/esti.css">
  </head>
  <body>

  <div class="contenedor">
    <div class="formulario">
    <p algin="right"><a href="{{ route('index') }}"><svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.646 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
          </svg></a></p>
    <h1>Inicia sesión</h1>

  <form name="nuevo" action="{{ route('validarad') }}" method="POST">
        {{ csrf_field() }}

        <input type='text' name='correo' placeholder="Ingresa tu correo" value="{{ old ('correo') }}">
        <input type='password' name='pass' placeholder="Ingresa tu contraseña" value="{{ old ('pass') }}">
        <input type='submit' value="Ingresar"><br>
        <br><br>
    </form>
   
    </div>
    
    <div class="button">
    <p>¡¡ Solo personal autorizado !!</p>
         <p></p>

  </body>
</html>





