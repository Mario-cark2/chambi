<?php
	require 'conexion.php';

    $oficios=$_POST['oficios'];
   
   
    $query = "INSERT INTO oficios (oficios) VALUES ('$oficios')";
    
    
$resultado = $conexion->query($query);

    
if($query){
    echo"insertado correctamente";
    
}else{

    echo"error al insertar";
}



?>