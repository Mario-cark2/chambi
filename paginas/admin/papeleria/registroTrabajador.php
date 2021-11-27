    <?php
	require 'conexion.php';

    $nombre=$_POST['nombre'];
    $segundoNombre=$_POST['segundoNombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
    $telefono=$_POST['telefono'];
    $CURP=$_POST['CURP'];
    $IdOficios=$_POST['IdOficios'];
   
   
    $query = "INSERT INTO servidor (nombre,segundoNombre,apellidoP,apellidoM,telefono,CURP,IdOficios) VALUES ('$nombre', '$segundoNombre','$apellidoP','$apellidoM','$telefono','$CURP','$IdOficios')";
    
    
$resultado = $conexion->query($query);

    
if($query){
    echo"insertado correctamente";
    
}else{

    echo"error al insertar";
}



?>