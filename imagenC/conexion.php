<?php

$conexion = new mysqli("localhost", "root","", "chambita3_0");

if ($conexion) {
    echo"Conexion exitosa";
}
else {
    echo"Conexion no exitosa";
}


?>