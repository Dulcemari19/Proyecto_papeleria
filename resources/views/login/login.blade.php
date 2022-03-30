<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('assets/img/img-7.jpg') }}" rel="icon">//cambio de imagen para icono vista hasta arriba
    <link rel="stylesheet" href="{{ asset('inicio/assets/css/est.css') }}">
  </head>
  <body>

  <div class="contenedor">
    <div class="formulario">
    <p algin="right"><a href="{{ route('index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a></p>

    <h1>Inicia sesión</h1>

  <form name="nuevo" action="{{ route('validar') }}" method="POST">
        {{ csrf_field() }}

        <input type='text' name='correo' placeholder="Ingresa tu correo" value="{{ old ('correo') }}">
        <input type='password' name='pass' placeholder="Ingresa tu contraseña" value="{{ old ('pass') }}">
        <input type='submit' value="Ingresar"><br>
        <br><br>
    </form>
   
    </div>
    
    <div class="button">
    <p>Al regístrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link"  href="{{ route('nuevo') }}">Regístrate </a></p>

  </body>
</html>





