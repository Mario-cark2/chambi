<?php
 
 $host_db='localhost';
$user_db='root';
$pass_db='ULISESmeza';
$db_name='chambita3_0';
$conexion=new mysqli($host_db,$user_db,$pass_db,$db_name);
if ($conexion->connect_error){die("La conexion fallo:".$conexion->connect_error);
                             //}else
     
                                                       
?>
 