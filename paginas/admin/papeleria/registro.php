<?php
	require('conexion.php');

	$response = $conexion->prepare("SELECT * FROM oficios");
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
<header>        
                
         </header>
  
<main>
    <center>
      
        
             <form class="form-inline" role="form" action="registroTrabajador.php" method="POST" enctype="multipart/form-data">
      <br><br><br>
        <div class="form-group">
            <label for="username">Primer nombre:</label><input type="text"NAME="nombre"><br><br>
        </div>
         
        <div class="form-group">
            <label for="username">Segundo Nombre:</label><input type="text"NAME="segundoNombre"><br><br>
        </div>
            
    
        <div class="form-group">
            <label for="username">Apellido paterno:</label><input type="text"NAME="apellidoP"><br><br>
        </div>
        
        <div class="form-group">
            <label for="username">Apellido materno:</label><input type="text"NAME="apellidoM"><br><br>
        </div>         

        <div class="form-group">
            <label for="username">Télefono:</label><input type="text"NAME="telefono"><br><br>
        </div>
    
        <div class="form-group">
            <label for="username">CURP:</label><input type="text"NAME="CURP" multiple><br>
        </div>

        <select>
        <?php foreach ($response as $r) {
            echo "<option>".$r[0]."</option>";
        }?>
        </select>

        
        <button class="btn btn-primary" type="submit" value="Registrar" >Registrar</button>
                 <script scr="js/jquery-3.4.1.min.js"></script>
                 <script scr="js/bootstrap.min.js"></script>
                </form>
             
       
      
</main>
</body>
</html>