<?php
    require 'conexion.php';
    
    $id=$_REQUEST['Id'];
    $nombre=$_POST['nombre'];
    $segundoNombre=$_POST['segundoNombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
 
    $telefono=$_POST['telefono'];
    $foto=addslashes(file_get_contents($_FILES['rutaFoto']['tmp_name']));
    $CA= addslashes(file_get_contents($_FILES['rutaCA']['tmp_name']));
    $CURP=$_POST['CURP'];
    $INE= addslashes(file_get_contents($_FILES['INE']['tmp_name']));
    $QR = addslashes(file_get_contents($_FILES['QR']['tmp_name']));
    

 $query = "UPDATE servidor SET nombre='$nombre', segundoNombre='$segundoNombre',apellidoP='$apellidoP',apellidoM='$apellidoM',telefono='$telefono',rutaFoto='$foto',rutaCA='$CA',CURP='$CURP',INE='$INE',QR='$QR' WHERE Id='$id'"; 

$resultado = $conexion->query($query);
if($query){
   echo"insertado correctamente";
}else{
    echo"error al insertar";
}



?>