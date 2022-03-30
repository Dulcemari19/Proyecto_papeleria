<?php

  if (isset($_POST['eliminar'])) {
    include('BASEDEDATOS_AD.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = '".$id."';";
    if ($conn->query($sql)) {
      ?>
        <script>alert('Se elmino el usuario con exito');</script>
        <script>window.location.assign('ad.php')</script>
      <?php
    }else{
      ?>
        <script>alert('Erro al eliminar');</script>
        <script>window.location.assign('ad.php')</script>
      <?php
    }

  }else{
    if (isset($_POST['actualizar'])) {
      include('BASEDEDATOS_AD.php');

      $id = $_GET['id'];

      $usuario = $_POST['email'];
      $contraseña = $_POST['password'];

      $sql = "UPDATE users SET email = '".$usuario."', password = '".$contraseña."' WHERE id = '".$id."';";

      if ($conn->query($sql)) {
        ?>
          <script>alert('Se actualizo el usuario con exito');</script>
          <script>window.location.assign('ad.php')</script>
        <?php
      }else{
        ?>
          <script>alert('Erro al actualizar');</script>
          <script>window.location.assign('ad.php')</script>
        <?php
      }
    }
  }
?>