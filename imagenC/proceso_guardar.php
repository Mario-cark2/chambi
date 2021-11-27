<?php
include ("conexion.php");

$nombre  = $_POST['nombre'];
$segundoNombre  = $_POST['segundoNombre'];
$apellidoP  = $_POST['apellidoP'];
$apellidoM  = $_POST['apellidoM'];

$telefono  = $_POST['telefono'];
$foto = addslashes(file_get_contents($_FILES['rutaFoto']['tmp_name']));
$CA = addslashes(file_get_contents($_FILES['rutaCA']['tmp_name']));
$CURP  = $_POST['CURP'];
$INE = addslashes(file_get_contents($_FILES['INE']['tmp_name']));
$QR = addslashes(file_get_contents($_FILES['QR']['tmp_name']));




$query = "INSERT INTO servidor (nombre,segundoNombre,apellidoP,apellidoM,telefono,rutaFoto,rutaCA,CURP,INE,QR) VALUES ('$nombre', '$segundoNombre', '$apellidoP', '$apellidoM','$telefono','$foto','$CA','$CURP','$INE', '$QR')";
$resultado = $conexion->query($query);

if ($resultado) {
	echo "Insertado";

} else {
	echo "Error al insertar";
}




?>