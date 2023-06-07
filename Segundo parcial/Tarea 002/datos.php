<?php
include_once 'conexion.php';

$sql= "SELECT * FROM contactos";
$resultado=$conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Datos</title>
</head>
<body>
    <br>
    <div class="container-fluid">
        <a href="formulariocontactos.php" class="btn btn-primary">Agregar nuevo contacto</a>
    </div>
<table class="table table-striped">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono</th>
                </tr>
        </thead>
            <tbody>
                 <?php while($filas=mysqli_fetch_array($resultado)){?>
                    
                    <tr>
                        <td><?php echo $filas['idcontacto']?></td>
                        <td><?php echo $filas['nombre']?></td>
                        <td><?php echo $filas['apellido']?></td>
                        <td><?php echo $filas['direccion']?></td>
                        <td><?php echo $filas['correoelectronico']?></td>
                        <td><?php echo $filas['telefono']?></td>
                        <td>
                            <a href="editar.php?idcontacto=<?php echo $filas['idcontacto']?>" class="btn btn-warning">Editar</a>
                            <a href="eliminar.php?idcontacto=<?php echo $filas['idcontacto']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                <?php }?>
                
            </tbody>
        </table>
    
</body>
</html>
      
