<?php
$contraseña = "ULISESmeza"; $usr = "root"; $bd = "chambita";
try{
	$con = new PDO('mysql:host=localhost;dbname=' . $bd, $usr, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

$response = $con->prepare("INSERT INTO oficios (oficios)values(:of)");
$response->bindParam(':of',$_POST['oficios']);
$response->execute(
);

?>