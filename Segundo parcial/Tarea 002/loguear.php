<?php
include_once 'conexion.php';

$nombre=$_POST["nombre"];
$contraseña=$_POST["contraseña"];
$sql = "SELECT nombre, pass FROM datos";
$result = $conexion->query($sql);
$row = mysqli_fetch_array($result);
$_SESSION['nombre_usuario'] = $row['nombre'];
$_SESSION['contraseña_usuario'] = $row['pass'];
if($nombre==$_SESSION['nombre_usuario'] && $contraseña==$_SESSION['contraseña_usuario']){
    header("Location:formulariocontactos.php");
    exit();
}
else{
   header("Location:login.php");
   exit();
}
       
  
?>
