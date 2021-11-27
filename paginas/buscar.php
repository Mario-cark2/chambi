<?php
  $mysqli = new mysqli("localhost", "root", "", "chambita3_0");

  $salida = "";
  $query = "SELECT * FROM servidor ORDER By Id";

  if(isset($_POST['buscar'])){
      $q = $mysqli->real_escape_string($_POST['buscar']);
      $query = "SELECT Id, nombre, segundoNombre, apellidoP, apellidoM, 
      id_colonia, telefono, rutaFoto, rutaCA, CURP, INE, QR
       FROM usuarios WHERE nombre LIKE '%".$q."%'
                   OR segundoNombre LIKE '%".$q."%' 
                   OR apellidoP LIKE '%".$q."%' 
                   OR apellidoM LIKE '%".$q."%' 
                   OR id_colonia LIKE '%".$q."%' 
                   OR telefono LIKE '%".$q."%' 
                   OR rutaFoto LIKE '%".$q."%' 
                   OR rutaCA LIKE '%".$q."%' 
                   OR CURP LIKE '%".$q."%' 
                   OR INE LIKE '%".$q."%' 
                   OR  QR LIKE '%".$q."%' ";
  }
  $resultado = $mysqli->query($query);
  if($resultado->num_rows > 0){

$salida=""




  }else{

  }
 
?>