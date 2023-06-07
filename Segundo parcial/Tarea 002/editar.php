<?php
include_once 'conexion.php';

$idcontacto=$_GET["idcontacto"];
$sql="SELECT * FROM contactos WHERE idcontacto='$idcontacto'";
$resultado=$conexion->query($sql);
while($filas=mysqli_fetch_array($resultado)){

?>
<form class="container" method="post">
  <div class="mb-3">
    <input type="hidden" class="form-control" name="txtid" value="<?php echo $filas['idcontacto']?>">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $filas['nombre']?>">
  </div>
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido:</label>
    <input type="text" class="form-control" name="apellido" value="<?php echo $filas['apellido']?>">
  </div>
  <div class="mb-3">
    <label for="direccion" class="form-label">Dirección:</label>
    <input type="text" class="form-control" name="direccion" value="<?php echo $filas['direccion']?>">
  </div>
  <div class="mb-3">
    <label for="correoelectronico" class="form-label">Correo electrónico:</label>
    <input type="email" class="form-control" name="correoelectronico" value="<?php echo $filas['correoelectronico']?>">
  </div>
  <div class="mb-3">
    <label for="telefono" class="form-label">Teléfono:</label>
    <input type="text" class="form-control" name="telefono" value="<?php echo $filas['telefono']?>">
  </div>
  <div class="col text-center">
   <button type="submit" class="btn btn-primary">Actualizar</button>
  </div>
</form>
<?php }?>


<?php

if(isset($_POST['txtid']) ||isset($_POST['nombre']) || isset($_POST['apellido']) || isset($_POST['direccion']) || isset($_POST['correoelectronico'])|| isset($_POST['telefono'])){
  $idp=$_POST['txtid'];
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $direccion=$_POST["direccion"];
  $correElectronico=$_POST["correoelectronico"];
  $telefono=$_POST["telefono"];
  $sql2="UPDATE contactos SET nombre='".$nombre."', apellido='".$apellido."', direccion='".$direccion."', correoelectronico='".$correElectronico."', telefono='".$telefono."' WHERE idcontacto='".$idp."'"; 
  $conexion->query($sql2);
  if($nombre=1){
    header("Location:datos.php");
  }
}
?>

<!--Links de bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>