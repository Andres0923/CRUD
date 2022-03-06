<?php
 
include 'conexion.php';

//Registro
if(isset($_POST['btn'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = md5($_POST['contra']);
    //Ingreso de datos a la base de datos
    $query= "INSERT INTO usuarios (id_user,Username,Email,Contraseña) VALUES('NULL','$nombre','$correo','$contraseña')";
    $ejecutar = mysqli_query($con,$query);
}
?>