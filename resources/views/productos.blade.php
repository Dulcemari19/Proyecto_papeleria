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
            <a class="navbar-brand text-brand" href="0-12.PHP">Jugue<span class="color-b">ttoys</span></a>
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
$page_title="Lista de productos";

 
// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
$nom = isset($_GET['nom']) ? $_GET['nom'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "1";
 
// show message
if($action=='added'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$nom}</strong> ¡agregado a tu carrito!";
    echo "</div>";
}
 
else if($action=='failed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$nom}</strong> No se pudo agregar a su carrito!";
    echo "</div>";
}
 
// select products from database
$query = "SELECT p.id, p.nom, p.price, ci.quantity 
        FROM products p 
            LEFT JOIN cart_items ci
                ON p.id = ci.product_id 
        ORDER BY p.nom";
 
$stmt = $conn->prepare( $query );
$stmt->execute();
 
// count number of products returned
$num = $stmt->rowCount();
 
if($num>0){
     
    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";
     
        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Nombre del producto</th>";
            echo "<th>Precio por día (MX)</th>";
            echo "<th style='width:5em;'>Cantidad</th>";
            echo "<th>Acciones</th>";
        echo "</tr>";
         
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
             
            //creating new table row per record
            echo "<tr>";
                echo "<td>";
                    echo "<div class='product-id' style='display:none;'>{$id}</div>";
                    echo "<div class='product-nom'>{$nom}</div>";
                echo "</td>";
                echo "<td>&#36;" . number_format($price, 2, '.' , ',') . "</td>";
                if(isset($quantity)){
                    echo "<td>";
                             echo "<input type='text' nom='quantity' value='{$quantity}' disabled class='form-control' />";
                    echo "</td>";
                    echo "<td>";
                        echo "<button class='btn btn-success' disabled>";
                            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Agregado!";
                        echo "</button>";
                    echo "</td>";             
                }else{
                    echo "<td>";
                             echo "<input type='number' nom='quantity' value='1' class='form-control' />";
                    echo "</td>";
                    echo "<td>";
                        echo "<button class='btn btn-primary add-to-cart'>";
                            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Añadir a la cesta";
                        echo "</button>";
                    echo "</td>";
                }
            echo "</tr>";
        }
         
    echo "</table>";
}
 
// tell the user if there's no products in the database
else{
    echo "No hay productos encontrados.";
}
 
include 'footer.php';
?>