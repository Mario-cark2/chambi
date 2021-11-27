<?php
	include("conexion.php");
	$nombre= $_POST['nombre'];
	$apellidos= $_POST['apellidos'];
	$contrasena= $_POST['contrasena'];
	$email= $_POST['email'];

	
$query="INSERT INTO usuarios (nombre,apellidos,contrasena,email) VALUES ('$nombre','$apellidos','$contrasena','$email')";
$resultado= $conexion->query($query);
if($resultado){
	header("Location: login.html");
}
else{
  
}

?>