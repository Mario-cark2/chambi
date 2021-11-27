<?php
    require 'conexion.php';
    
    $Id=$_REQUEST['Id'];
    $nombre=$_POST['nombre'];
    $segundoNombre=$_POST['segundoNombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
    $telefono=$_POST['telefono'];
    $CURP=$_POST['CURP'];
    $colonia=$_POST['colonia'];
    $calle=$_POST['colonia'];
   

 $query = "UPDATE servidor SET nombre='$nombre', segundoNombre='$segundoNombre',apellidoP='$apellidoP',apellidoM='$apellidoM',telefono='$telefono',CURP='$CURP',colonia='$colonia',calle='$calle' WHERE Id='$Id'"; 

$resultado = $conexion->query($query);
if($query){
   echo"insertado correctamente";
}else{
    echo"error al insertar";
}



?>