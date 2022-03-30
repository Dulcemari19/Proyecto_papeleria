<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de productos Renta</title>
     <!-- Bootstrap CSS -->
    <link href="Proyecto-Equipo-5/libs/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
 
    <!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
          <link href="Proyecto-Equipo-5/css/style.css" rel="stylesheet">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
             
            </button>
      <a class="navbar-brand text-brand" href="0-12.php">Jugue<span class="color-b">ttoys</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
        </div> 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li  >
                    <a href="productos.php">Productos</a>
                </li>
                <li  >
                    <a href="carro.php">
                  Carrito 
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
          
    </div>
</div>
<?php
// connect to database
require_once 'conexion.php';
// page headers
$page_title="Carrito";

 
// parameters
$action = isset($_GET['action']) ? $_GET['action'] : "";
$nom = isset($_GET['nom']) ? $_GET['nom'] : "";
 
// display a message
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$nom}</strong> fue eliminado del carrito!";
    echo "</div>";
}
 
else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$nom}</strong> la cantidad ha sido actualizada!";
    echo "</div>";
}
 
else if($action=='failed'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$nom}</strong> no se pudo actualizar la cantidad!";
    echo "</div>";
}
 
else if($action=='invalid_value'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$nom}</strong> cantidad es inválida!";
    echo "</div>";
}
 
// select products in the cart
$query="SELECT p.id, p.nom, p.price, ci.quantity, ci.quantity * p.price AS subtotal  
            FROM cart_items ci  
                LEFT JOIN products p 
                    ON ci.product_id = p.id"; 
 
$stmt=$conn->prepare( $query );
$stmt->execute();
 
// count number of rows returned
$num=$stmt->rowCount();
 
if($num>0){
     
    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";
     
    // our table heading
    echo "<tr>";
        echo "<th class='textAlignLeft'>Nombre del producto</th>";
        echo "<th>Precio (USD)</th>";
            echo "<th style='width:15em;'>Cantidad</th>";
            echo "<th>Sub Total</th>";
            echo "<th>Acciones</th>";
    echo "</tr>";
         
    $total=0;
     
    while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
       
        echo "<tr>";
            echo "<td>";
                        echo "<div class='product-id' style='display:none;'>{$id}</div>";
                        echo "<div class='product-nom'>{$nom}</div>";
            echo "</td>";
            echo "<td>&#36;" . number_format($price, 2, '.', ',') . "</td>";
            echo "<td>";
                        echo "<div class='input-group'>";
                            echo "<input type='number' nom='quantity' value='{$quantity}' class='form-control'>";
                             
                            echo "<span class='input-group-btn'>";
                                echo "<button class='btn btn-info update-quantity' type='button'><i class='glyphicon glyphicon-refresh'></i> Actualizar</button>";
                            echo "</span>";
                             
                        echo "</div>";
                echo "</td>";
                echo "<td>&#36;" . number_format($subtotal, 2, '.', ',') . "</td>";
                echo "<td>";
            echo "<a href='eliminar.php?id={$id}&nom={$nom}' class='btn btn-danger'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Quitar del carrito";
            echo "</a>";
            echo "</td>";
        echo "</tr>";
             
        $total += $subtotal;
    }
     
    echo "<tr>";
    echo "<td><b>Total</b></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>&#36;" . number_format($total, 2, '.', ',') . "</td>";
    echo "<td>";
            echo "<a href='#' class='btn btn-success'>";
            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Pagar";
            echo "</a>";
    echo "</td>";
    echo "</tr>";
         
    echo "</table>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "<strong>No se han encontrado productos</strong> en tu carrito!";
    echo "</div>";
}
 
 
include 'footer.php';
?>