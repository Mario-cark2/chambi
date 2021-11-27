
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Registrar trabajador</title>
</head>
<body>
    <center>
    <a href="consultarTrabajador.php"><img src="img/regresar.png" align="left" width="40" height="40"/> </a>
        <h1>Modificar trabajador</h1>   
        <hr>
        <?php

$id=$_REQUEST['Id'];
   include("conexion.php");

    $query="SELECT * FROM usuarios WHERE Id='$id'";
    $resultado= $conexion->query($query);
    ($row=$resultado->fetch_assoc());
        ?>
        <form class="form-inline" action="modificar_proceso.php?Id=<?php echo $row['Id'];?>" method="POST" enctype="multipart/form-data"><br><br>
        
            
           
        <div class="form-group">
            <label for="username">Primer nombre:</label><input type="text"NAME="nombre" placeholder="Ingrese Primer nombnre" value="<?php echo $row['nombre']; ?>"><br><br>
        
         </div>
         
            <div class="form-group">
            <label for="username">Segundo nombre:</label><input type="text"NAME="segundoNombre" placeholder="Ingrese segundo Nombre" value="<?php echo $row['segundoNombre']; ?>"><br><br>
            </div>
             
        <div class="form-group">
    
            <label for="username">Apellido paterno:</label><input type="text"NAME="apellidoP" placeholder="ingrese apellido Paterno" value="<?php echo $row['apellidoP']; ?>"><br><br>
             </div>
        
             <div class="form-group">
            <label for="username">Apellido materno:</label><input type="text"NAME="apellidoM" placeholder="Ingrese apellido materno" value="<?php echo $row['apellidoM']; ?>"><br><br>
</div>

                
<div class="form-group">
              <label for="username">Télefono:</label><input type="text"NAME="telefono" placeholder="Ingrese el telefono" value="<?php echo $row['telefono']; ?>"><br><br>
</div>
    
<div class="form-group">
              Foto:
                <input type="file" NAME="rutaFoto" title="seleccione una foto ">
                 <label alt="Label" data-placeholder="" value="<?php echo $row['rutaFoto']; ?>"></label></div>
    </div>
    <div class="form-group">
              CA:
                <input type="file" NAME="rutaCA" title="seleccione una foto ">
                 <label alt="Label" data-placeholder="" value="<?php echo $row['rutaCA']; ?>"></label></div>
               </div>
               <div class="form-group">
        <label for="username">CURP:</label><input type="text"NAME="CURP" placeholder="Ingrese la CURP" value="<?php echo $row['CURP']; ?>"><br>
        </div>
        <div class="form-group">
          INE:
                <input type="file" NAME="INE" title="seleccione una foto " >
                 <label alt="Label" data-placeholder="" value="<?php echo $row['INE']; ?>"></label>
    </div>
    <div class="form-group">
    
      QR:
                <input type="file" NAME="QR" title="seleccione una foto ">
                 <label alt="Label" data-placeholder="" value="<?php echo $row['QR']; ?>"></label></div><br><br>
           
                 </div>
           
           
           <!-- <input type="text" required NAME="nombre" id="nombre" placeholder="escribe tu nombre" value="<?php echo $row['nombre']; ?>" /><br>
            <input type="text" required NAME="segundoNombre" id="segundoNombre" placeholder="escribe tu nombre" value="<?php echo $row['segundoNombre']; ?>" /><br>
            <input type="text" required NAME="apellidoP" id="apellidoP" placeholder="escribe tu apellido" value="<?php echo $row['apellidoP']; ?>" /><br>
            <input type="text" required NAME="apellidoM" id="apellidoM" placeholder="escribe tu apellido" value="<?php echo $row['apellidoM']; ?>" /><br>
            <input type="text" required NAME="telefono" id="telefono" placeholder="escribe tu telefono" value="<?php echo $row['telefono']; ?>" /><br>
            foto:<input type="file" required NAME="rutaFoto" title="seleccione una foto" id="rutaFoto" placeholder="" value="<?php echo $row['rutaFoto']; ?>" /><br>
            CA:<input type="file" required NAME="rutaCA" title="seleccione una foto" id="rutaCA" placeholder="" value="<?php echo $row['rutaCA']; ?>" /><br>
            <input type="text" required NAME="CURP" id="CURP" placeholder="escribe tu CURP" value="<?php echo $row['CURP']; ?>" /><br>
            INE:<input type="file" required NAME="INE" title="seleccione una foto" id="INE" placeholder="" value="<?php echo $row['INE']; ?>" /><br>
            QR:<input type="file" required NAME="QR" title="seleccione una foto" id="QR" placeholder="" value="<?php echo $row['QR']; ?>" /><br>-->
        
                
                 <button class="btn btn-primary" type="submit" value="Registrar" >Guardar</button>
                 <script scr="js/jquery-3.4.1.min.js"></script>
                 <script scr="js/bootstrap.min.js"></script>
</body>
</html>