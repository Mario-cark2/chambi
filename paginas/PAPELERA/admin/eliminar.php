<?php
    include("conexion.php");

    $Id=$_REQUEST['Id'];
		
$query="DELETE FROM  servidor   WHERE Id='$Id'";
$resultado= $conexion->query($query);
if($resultado){
    echo"insercion exitosa";
	//header("Location: consultarTrabajador.php");
}
else{
    echo"insercion no exitosa";
}

?>