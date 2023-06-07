<?php

include_once 'conexion.php';
$idcontacto=$_GET["idcontacto"];
$sql="DELETE from contactos WHERE idcontacto='$idcontacto'";
$conexion->query($sql);
header("Location:datos.php");

?>