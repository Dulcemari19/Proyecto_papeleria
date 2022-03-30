<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRATE</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('assets/img/img-7.jpg') }}" rel="icon">
    <link rel="stylesheet" href="inicio/assets/css/est.css">
  </head>
  <body>

  <div class="formulario">
   
   <div class="contenedor">
   <p algin="right"><a href="{{ route('index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a></p>
    <h1>Regístrate</h1>


        <form name="nuevo" action="{{ route('guardar') }}" method="POST">
              {{ csrf_field() }}
              
              @if(count($errors) > 0)
                  @foreach($errors->all() as $error)
                          {{ $errors }}<br>
                  @endforeach
              @endif

        <input type='text' name='nombre' placeholder="Nombre" value="{{ old ('nombre') }}">
        <input type='text' name='apellidos' placeholder="Apellidos" value="{{ old ('apellidos') }}">
        <input type='text' name='direc' placeholder="Dirrección" value="{{ old ('direc') }}">
        <input type='text' name='tel' placeholder="Teléfono" value="{{ old ('tel') }}">
        <input type='text' name='email' placeholder="Ingresa tu correo" value="{{ old ('email') }}">
        <input type='password' name='pass' placeholder="Ingresa tu contraseña" value="{{ old ('pass') }}">
        <input type='submit' value="Regístrar"><br>
        </form>
    </div>
    </div>
    <div class="button">
    <p>Al regístrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="{{ route('login') }}">Iniciar Sesión</a></p>
  </body>
</html>