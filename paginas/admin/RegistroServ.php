<?php
require_once 'conexion.php';



$nom=$_REQUEST["nombre"];
$seg=$_REQUEST["segundoNombre"];
$apep=$_REQUEST["apellidoP"];
$apem=$_REQUEST["apellidoM"];
$cp=$_REQUEST["cp"];
$tel=$_REQUEST["telefono"];
$curp=$_REQUEST["CURP"];
$ofi=$_REQUEST["oficio"];
$col=$_REQUEST["colonia"];
$calle=$_REQUEST["calle"];
$edad=$_REQUEST["edad"];

$ide=$_FILES["ide"]["name"];
$ruta=$_FILES["ide"]["tmp_name"];
$idecampo="fotos/".$ide;
copy($ruta,$idecampo);

$foto=$_FILES["prueba1"]["name"];
$ruta=$_FILES["prueba1"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);

$nopenales=$_FILES["nopenales"]["name"];
$ruta=$_FILES["nopenales"]["tmp_name"];
$nopcampo="fotos/".$nopenales;
copy($ruta,$nopcampo);

$obra1=$_FILES["obra1"]["name"];
$ruta=$_FILES["obra1"]["tmp_name"];
$obra1campo="fotos/".$obra1;
copy($ruta,$obra1campo);

$obra2=$_FILES["obra2"]["name"];
$ruta=$_FILES["obra2"]["tmp_name"];
$obra2campo="fotos/".$obra2;
copy($ruta,$obra2campo);





/* H A B I L I T A R   C A M P O  E D A D  Y  V A R I A B L E   $edad */
mysql_query("insert into servidor (nombre, segundoNombre, apellidoP, apellidoM, edad, id_colonia, telefono, rutaFoto, rutaCA, CURP, INE, colonia, calle, oficio, Obras, Obras2) values('$nom','$seg','$apep','$apem', '$edad', '$cp', '$tel', '$destino', '$nopcampo', '$curp', '$idecampo', '$col', '$calle', '$ofi', '$obra1campo', '$obra2campo')");

header("Location: ConsulTrab.php");



//mysql_query("insert into servidor (nombre, segundoNombre, apellidoP, apellidoM, id_colonia, telefono, CURP, oficio, colonia, calle, rutaprueba) values('$nom','$seg','$apep','$apem', '$cp', '$tel', '$curp', '$ofi', '$col', '$calle', '$destino')");
//mysql_query("insert into servidor (nombre, segundoNombre, apellidoP, rutaprueba) values('$nom','$seg','$apep','$destino')");
// CON FOTO 
//mysql_query("insert into servidor (nombre, segundoNombre, apellidoP, apellidoM, telefono, CURP, colonia, calle, oficio, rutaprueba) values('$nom','$seg','$apep','$apem','$tel','$curp','$col','$calle','$ofi','$destino')");

//mysql_query("insert into servidor (nombre, segundoNombre, apellidoP, apellidoM, telefono, CURP, colonia, calle, oficio) values('$nom','$seg','$apep','$apem','$tel','$curp','$ofi','$col','$calle')");






/*$response = $con->prepare("INSERT INTO servidor (nombre,segundoNombre,apellidoP,apellidoM,telefono,CURP,IdOficios,colonia,calle,IdCP)values(:nm,:sn,:ap,:am,:tn,:crp,:ido,:col,:cll,:cp)");
$response->bindParam(':nm',$_POST['nombre']);
$response->bindParam(':sn',$_POST['segundoNombre']);
$response->bindParam(':ap',$_POST['apellidoP']);
$response->bindParam(':am',$_POST['apellidoM']);
$response->bindParam(':tn',$_POST['telefono']);
$response->bindParam(':crp',$_POST['CURP']);
$response->bindParam(':ido',$_POST['oficios']);
$response->bindParam(':col',$_POST['colonia']);
$response->bindParam(':cll',$_POST['calle']);
$response->bindParam(':cp',$_POST['cp']);
$response->execute(
);
*/



?>