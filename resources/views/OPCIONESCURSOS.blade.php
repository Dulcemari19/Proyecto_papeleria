  <?php
  if (isset($_POST['eliminar'])) {
    include('BASEDEDATOSJU.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = '".$id."';";
    if ($conn->query($sql)) {
      ?>
        <script>alert('Se elimino el curso con exito');</script>
        <script>window.location.assign('juren.php')</script>
      <?php
    }else{
      ?>
        <script>alert('Error al eliminar');</script>
        <script>window.location.assign('juren.php')</script>
      <?php
    }
 
  }else{
    if (isset($_POST['actualizar'])) {
      include('BASEDEDATOSJU.php');

      $id = $_GET['id'];

      $usuario = $_POST['id'];
      $nom = $_POST['nom'];
      $descrip = $_POST['descrip'];
      $price = $_POST['price'];

      $sql = "UPDATE products SET id = '".$usuario."', nom = '".$nom."', descrip = '".$descrip."', price = '".$price."' WHERE id = '".$id."';";

      if ($conn->query($sql)) {
        ?>
          <script>alert('Se actualizo el curso con exito');</script>
          <script>window.location.assign('juren.php')</script>
        <?php
      }else{
        ?>
          <script>alert('Error al actualizar');</script>
          <script>window.location.assign('juren.php')</script>
        <?php
      }
    }
  }
?> 
