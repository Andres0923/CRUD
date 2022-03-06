<?php

include 'conexion.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "DELETE FROM producto WHERE id=$id";
    $resultado = mysqli_query($con,$query);
    if(!$resultado){
        die("Query failed");
    }
    header("Location:productos.php");
}
?>