<?php
	require('conexion.php');

	$response = $conexion->prepare("SELECT * FROM colonias");
    $response->execute();

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Registrar trabajador</title>
</head>
<body>
<header>                        
                <!-- <div id='Buscador'>  
                         <div class='cell'><input type='search' placeholder='Busqueda...'></div>
                 </div>-->
                 <div class="wrapper">
                         <div class="logo"><a href=""><img src="img/chambita2.png" width="250px" height="200px"></a></div>
                
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



<!--select name="Id">
            <?php foreach ($response as $r) {
              echo "<option value=".$r[0].">".$r[1]."</option>";
            }?></select-->

                
<div class="form-group">
              <label for="username">Télefono:</label><input type="text"NAME="telefono"><br><br>
</div>
    
<div class="form-group">
              Foto:
                <input type="file" NAME="rutaFoto" id="rutaFoto" title="seleccione una foto ">
                 <label alt="Label" data-placeholder=""></label></div>
    </div>
    <div class="form-group">
              Antecedentes No Penales:
                <input type="file" NAME="rutaCA" id="rutaCA"title="seleccione una foto "multiple>
                 <label alt="Label" data-placeholder="Seleccione una foto"></label></div>
               </div>
               <div class="form-group">
        <label for="username">CURP:</label><input type="text"NAME="CURP" multiple><br>
        </div>
        <div class="form-group">
          INE:
                <input type="file" NAME="INE" id="INE" title="seleccione una foto "multiple>
                 <label alt="Label" data-placeholder=""></label>
    </div>
    <div class="form-group">
    
      QR:
                <input type="file" NAME="QR" id="QR" title="seleccione una foto "multiple>
                 <label alt="Label" data-placeholder=""></label></div><br><br>
                 <label for="username">Dirección</label>
                 <input type="text"NAME="direccion">
                 <label for="username">Oficio</label>
                 <input type="text"NAME="oficio"><br><br><br>


        
</table>












              </div>
                 <button class="btn btn-primary" type="submit" value="Registrar" >Registrar</button>
                 <script scr="js/jquery-3.4.1.min.js"></script>
                 <script scr="js/bootstrap.min.js"></script>
          

          
          
          
          
          
          
                </form>
          </main>
</body>

</html>