<?php
include_once 'conexion.php';

if(isset($_POST['nombre']) || isset($_POST['apellido']) || isset($_POST['direccion']) || isset($_POST['correoelectronico'])|| isset($_POST['telefono'])){
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $direccion=$_POST["direccion"];
  $correElectronico=$_POST["correoelectronico"];
  $telefono=$_POST["telefono"];
  $sql="INSERT INTO contactos(nombre,apellido,direccion,correoelectronico,telefono) VALUES ('$nombre','$apellido','$direccion','$correElectronico','$telefono')";
  $conexion->query($sql);
  if($nombre=1){
    header("Location:datos.php");
  //https://www.youtube.com/watch?v=wvuQtFjWw6I
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>Formulario Contactos</title>
</head>
<body>

<h1 class="text-center">Formulario Contactos</h1>   

<form class="container" method="post">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido:</label>
    <input type="text" class="form-control" name="apellido" required>
  </div>
  <div class="mb-3">
    <label for="direccion" class="form-label">Dirección:</label>
    <input type="text" class="form-control" name="direccion" required>
  </div>
  <div class="mb-3">
    <label for="correoelectronico" class="form-label">Correo electrónico:</label>
    <input type="email" class="form-control" name="correoelectronico" required>
  </div>
  <div class="mb-3">
    <label for="telefono" class="form-label">Teléfono:</label>
    <input type="text" class="form-control" name="telefono" required>
  </div>
  <div class="col text-center">
   <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
  
</body>
</html>