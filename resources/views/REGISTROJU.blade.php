<?php

  require 'BASEDEDATOSJU.php';

  $message = '';

  if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['descrip']) && !empty($_POST['price'])) {
    $sql = "INSERT INTO products (id, nom, descrip, price) VALUES (:id, :nom, :descrip, :price)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':nom', $_POST['nom']);
    $stmt->bindParam(':descrip', $_POST['descrip']);
    $stmt->bindParam(':price', $_POST['price']);

    if ($stmt->execute()) {
      $message = 'Nuevo curso registrado con éxito';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al registrar tu curso';
    }
  }
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRA TU CURSO</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/REGRESO.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>NUEVO JUGUETE</h1>

    <form action="REGISTROJU.php" method="POST">
      <input name="id" type="text" style="text-align:center;" placeholder="ID A REGISTRAR">
      <input name="nom" type="text" style="text-align:center;" placeholder="NOMBRE DEL JUGUETE">
      <input name="descrip" type="text" style="text-align:center;" placeholder="DESCRIPCIÓN">
      <input name="price" type="text" style="text-align:center;" placeholder="PRECIO">
      <input type="submit" value="Registrar">
    </form>

  </body>
</html>
