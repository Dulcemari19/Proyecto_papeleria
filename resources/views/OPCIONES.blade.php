<?php

  if (isset($_POST['eliminar'])) {
    include('BASEDEDATOS.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = '".$id."';";
    if ($conn->query($sql)) {
      ?>
        <script>alert('Se elmino el usuario con exito');</script>
        <script>window.location.assign('ta_usu.php')</script>
      <?php
    }else{
      ?>
        <script>alert('Erro al eliminar');</script>
        <script>window.location.assign('ta_usu.php')</script>
      <?php
    }

  }else{
    if (isset($_POST['actualizar'])) {
      include('BASEDEDATOS.php');

      $id = $_GET['id'];
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['ap'];
      $dirrección = $_POST['di'];
      $teléfono = $_POST['tel'];
      $usuario = $_POST['email'];
      $contraseña = $_POST['password'];

      $sql = "UPDATE users SET nombre= '".$nombre."', ap= '".$apellidos."', di= '".$dirrección."', tel= '".$teléfono."', email = '".$usuario."', password = '".$contraseña."' WHERE id = '".$id."';";

      if ($conn->query($sql)) {
        ?>
          <script>alert('Se actualizo el usuario con exito');</script>
          <script>window.location.assign('ta_usu.php')</script>
        <?php
      }else{
        ?>
          <script>alert('Erro al actualizar');</script>
          <script>window.location.assign('ta_usu.php')</script>
        <?php
      }
    }
  }
?>