<?php

  require 'BASEDEDATOS.php';

  $message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['ap']) && !empty($_POST['di']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (nombre, ap, di, tel, email, password) VALUES (:nombre, :ap, :di, :tel, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':ap', $_POST['ap']);
    $stmt->bindParam(':di', $_POST['di']);
    $stmt->bindParam(':tel', $_POST['tel']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRATE</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="inicio/assets/css/est.css">
  </head>
  <body>

    

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div class="formulario">
   
   <div class="contenedor">
   <p algin="right"><a href="SESIONES.php"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.646 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
          </svg></a></p>
    <h1>Regístrate</h1>
    

    <form action="REGISTRO.php" method="POST">
    <input name="nombre" type="text" placeholder="Nombre">
    <input name="ap" type="text" placeholder="Apellidos">
    <input name="di" type="text" placeholder="Dirrección">
    <input name="tel" type="text" placeholder="Teléfono">
      <input name="email" type="text" placeholder="Ingresa tu correo">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
     
      <input type="submit" value="Regístrar">
    </form>
    </div>
    </div>
    <div class="button">
    <p>Al regístrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="INICIASESION.php">Iniciar Sesión</a></p>
  </body>
</html>
