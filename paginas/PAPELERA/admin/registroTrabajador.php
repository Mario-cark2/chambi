    <?php






	require 'conexion.php';

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
    $direccion=$_POST['direccion'];
    $oficio=$_POST['oficio'];

    $query = "INSERT INTO servidor (nombre,segundoNombre,apellidoP,apellidoM,telefono,rutaFoto,rutaCA,CURP,INE,QR,direccion,oficio) VALUES ('$nombre', '$segundoNombre','$apellidoP','$apellidoM','$telefono','$foto','$CA','$CURP','$INE','$QR','$direccion','$oficio')";
    
    /*
    if($_POST['checkbox'] != "")
            {
		 if(is_array($_POST['checkbox']))
         {
       		 // realizamos el ciclo
       		 while(list($key,$value) = each($_POST['checkbox'])) 
        	{
                $query = "INSERT INTO servidor (nombre,segundoNombre,apellidoP,apellidoM,telefono,rutaFoto,rutaCA,CURP,INE,QR,oficio) VALUES ('$nombre', '$segundoNombre','$apellidoP','$apellidoM','$telefono','$foto','$CA','$CURP','$INE','$QR','$value')";
            }   		 
        }
            }

                    */
$resultado = $conexion->query($query);

    
if($query){
   echo"insertado correctamente";
}else{
    echo"error al insertar";
}



?>