<?php

include 'conexion.php';

if(isset($_POST['Enviar'])){


$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];


$query = "INSERT INTO producto (id,Nombre,Descripción,Precio) 
VALUES ('NULL','$producto','$descripcion','$precio')";

$ejecutar = mysqli_query($con,$query);

header("Location:productos.php");
}






?>