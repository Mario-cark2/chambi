
<?php
require('connection.php');

$response = $connection->prepare("SELECT * FROM colonias");
$response->execute();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar trabajador</title>
</head>
<body>
    <center>
        <h1>Agregar Trabajador</h1>   

        <form action="registroTrabajador.php" method="POST">
        
            <label for="username">Primer nombre</label><input type="text"NAME="nombre"><br>
    
            <label for="username">Segundo Nombre</label><input type="text"NAME="segundoNombre"><br>
    
            <label for="username">Apellido paterno</label><input type="text"NAME="apellidoP"><br>
    
            <label for="username">Apellido materno</label><input type="text"NAME="apellidoM"><br><br><br>
            <th>Codigo postal</th><br>
             <select name="cp">
                <?php foreach ($response as $r) {
                  echo "<option value=".$r[0].">".$r[1]."</option>";
                }?></select>
                <br><br>
    
              <label for="username">Telefono</label> <input type="text"NAME="telefono"><br>
    
    
              foto: <input type="file" NAME="rutaFoto" title="seleccione una foto ">
                 <label alt="Label" data-placeholder=""></label></div></th> 
                 <hr>
    
              Antecedentes No Penales: <input type="file" NAME="rutaCA" title="seleccione una foto ">
                 <label alt="Label" data-placeholder=""></label></div></th> 
               
        <label for="username">CURP</label><br>
            <input type="text"NAME="CURP"><br>
        
          INE<br><br>
                <input type="file" NAME="INE" title="seleccione una foto ">
                 <label alt="Label" data-placeholder=""></label></div></th>
    
    
      QR<br><br>
                <input type="file" NAME="QR" title="seleccione una foto ">
                 <label alt="Label" data-placeholder=""></label></div></th> 

                 <input type="submit" value="Registrar" >
</body>
</html>