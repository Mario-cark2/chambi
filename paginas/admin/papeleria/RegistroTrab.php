<?php
$contraseña = "ULISESmeza"; $usr = "root"; $bd = "chambita";
try{
	$con = new PDO('mysql:host=localhost;dbname=' . $bd, $usr, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

$response = $con->prepare("INSERT INTO servidor (nombre,segundoNombre,apellidoP,apellidoM,telefono,CURP,IdOficios,colonia,calle)values(:nm,:sn,:ap,:am,:tn,:crp,:ido,:col,:cll)");
$response->bindParam(':nm',$_POST['nombre']);
$response->bindParam(':sn',$_POST['segundoNombre']);
$response->bindParam(':ap',$_POST['apellidoP']);
$response->bindParam(':am',$_POST['apellidoM']);
$response->bindParam(':tn',$_POST['telefono']);
$response->bindParam(':crp',$_POST['CURP']);
$response->bindParam(':ido',$_POST['oficios']);
$response->bindParam(':col',$_POST['colonia']);
$response->bindParam(':cll',$_POST['calle']);
$response->execute(
);

?>