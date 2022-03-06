<?php
include 'conexion.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "SELECT * FROM producto WHERE id=$id";
    $resultado = mysqli_query($con,$query);
    if(mysqli_num_rows($resultado)==1){
      $row = mysqli_fetch_array($resultado);
      $nombre = $row['Nombre'];
     $descrip = $row['Descripción'];
      $precio = $row['Precio'];
    }
    
}
if(isset($_POST['Modificar'])){
    $id = $_GET['id'];
    $mnombre = $_POST['producto'];
    $mdescripcion = $_POST['descripcion'];
    $mprecio = $_POST['precio'];
    $query = "UPDATE producto set Nombre = '$mnombre', Descripción = '$mdescripcion', Precio = '$mprecio' WHERE id = $id";
    $resultado = mysqli_query($con,$query);
    header("Location:productos.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="titu">
<h1>Modificar</h1>
</div>
<div class="formulario">

<form action="editar.php?id=<?php echo $_GET['id']; ?>" method="post">
<input type="text" name="producto" placeholder="Ingrese producto" value="<?php echo $nombre; ?>" >
 <input type="text" name="descripcion" placeholder="Ingrese descripción" value="<?php echo $descrip; ?>">
 <input type="number" step="0.01" name="precio" placeholder="Ingrese precio" value="<?php echo $precio; ?>">
 <input type="submit" name="Modificar" value="Modificar">

</form>
</div>
</body>
</html>
