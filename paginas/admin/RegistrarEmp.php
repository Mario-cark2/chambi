<?php
$contraseña = "ULISESmeza"; $usr = "root"; $bd = "chambita3_0";
try{
	$con = new PDO('mysql:host=localhost;dbname=' . $bd, $usr, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}


$response = $con->prepare("INSERT INTO usuarios (nombre,apellidos,Idtipousuario,contrasena,email,pasadmin)
values(:nm,:ap,:iu,:ca,:em,:pa)");
$response->bindParam(':nm',$_POST['nombre']);
$response->bindParam(':ap',$_POST['apellidos']);
$response->bindParam(':iu',$_POST['Idtipousuario']);
$response->bindParam(':ca',$_POST['contrasena']);
$response->bindParam(':em',$_POST['email']);
$response->bindParam(':pa',$_POST['pasadmin']);
$response->execute();?>