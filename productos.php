<?php 

include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productos.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <div class="titu">
            <h1>Insertar productos</h1>
        </div>

        <div class="formulario">

            <form action="produc.php" method="post">
             <input type="text" name="producto" placeholder="Ingrese producto" >
             <input type="text" name="descripcion" placeholder="Ingrese descripción" >
             <input type="number" step="0.01" name="precio" placeholder="Ingrese precio">
             <input type="submit" name="Enviar" value="Enviar">
            </form>
        </div>

        <div class="datos">
           <table class="table table-bordered">
               <thead>

                <tr>
                 <th>Producto</th>
                 <th>Descripción</th>
                 <th>Precio</th>
                 <th>Opciones</th>
                </tr>
               </thead>
              <tbody>
                  <?php
               
                   $query = "SELECT * FROM producto";
                   $ejecutar = mysqli_query($con,$query);

                   while($row= mysqli_fetch_array($ejecutar)): ?>

                    <tr>
                        <td><?php echo $row['Nombre'] ?></td>
                        <td><?php echo $row['Descripción'] ?></td>
                        <td>$<?php echo $row['Precio'] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $row['id'];  ?>" class="btn btn-secondary" >
                            
                             <i class='bx bxs-edit-alt'></i>
                            </a> 
                            <a href="eliminar.php?id=<?php echo $row['id'];  ?>" class="btn btn-danger">
                            <i class='bx bxs-trash'></i>
                            </a> 
                        </td>
                   </tr>

                  <?php endwhile ?>
              </tbody>
           </table>




        </div>
        <div class="footer">


        </div>
    </div>
</body>
</html>