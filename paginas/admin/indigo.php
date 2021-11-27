<?php
require_once 'conexion.php'; 
$sql= mysql_query("SELECT * FROM servidor");
while($res= mysql_fetch_array($sql)){
    echo$res['nombre'].'<br>';
    echo '<img src="'.$res["INE"].'" width="100" heigth="100"><br>';
    echo$res['telefono'].'<br>';
}
?>
