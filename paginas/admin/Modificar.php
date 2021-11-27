
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <title>Modificar</title>
</head>
<body>
    <center>
    <a href="consultarTrabajador.php"><img src="img/regresar.png" align="left" width="40" height="40"/> </a>
        <h1>Modificar trabajador</h1>   
        <hr>
        <?php

$id=$_REQUEST['Id'];
   include("conexion.php");

    $query="SELECT * FROM usuarios WHERE Id='$Id'";
    $resultado= $conexion->query($query);
    ($row=$resultado->fetch_assoc());
        ?>
        <form class="form-inline" action="ModifProce.php?Id=<?php echo $row['Id'];?>" method="POST" enctype="multipart/form-data">
        
            
           
    
        <label for="username">Nombre:</label><input type="text"NAME="nombre" placeholder="Ingrese Primer nombnre" value="<?php echo $row['nombre']; ?>">
        
        <label for="username">Segundo nombre:</label><input type="text"NAME="segundoNombre" placeholder="Ingrese segundo Nombre" value="<?php echo $row['segundoNombre']; ?>">
          
        <label for="username">Apellido paterno:</label><input type="text"NAME="apellidoP" placeholder="ingrese apellido Paterno" value="<?php echo $row['apellidoP']; ?>">
          
        <label for="username">Apellido materno:</label><input type="text"NAME="apellidoM" placeholder="Ingrese apellido materno" value="<?php echo $row['apellidoM']; ?>">

        <label for="username">Télefono:</label><input type="text"NAME="telefono" placeholder="Ingrese el telefono" value="<?php echo $row['telefono']; ?>">

        <label for="username">CURP:</label><input type="text"NAME="CURP" placeholder="Ingrese la CURP" value="<?php echo $row['CURP']; ?>">
       
        <label for="username">Colonia:</label><input type="text"NAME="colonia" placeholder="Ingrese una colonia" value="<?php echo $row['colonia']; ?>">

        <label for="username">calle:</label><input type="text"NAME="calle" placeholder="Ingrese la calle" value="<?php echo $row['calle']; ?>">
           
           <!-- <input type="text" required NAME="nombre" id="nombre" placeholder="escribe tu nombre" value="<?php echo $row['nombre']; ?>" /><br>
            <input type="text" required NAME="segundoNombre" id="segundoNombre" placeholder="escribe tu nombre" value="<?php echo $row['segundoNombre']; ?>" /><br>
            <input type="text" required NAME="apellidoP" id="apellidoP" placeholder="escribe tu apellido" value="<?php echo $row['apellidoP']; ?>" /><br>
            <input type="text" required NAME="apellidoM" id="apellidoM" placeholder="escribe tu apellido" value="<?php echo $row['apellidoM']; ?>" /><br>
            <input type="text" required NAME="telefono" id="telefono" placeholder="escribe tu telefono" value="<?php echo $row['telefono']; ?>" /><br>
            <input type="text" required NAME="CURP" id="CURP" placeholder="escribe tu CURP" value="<?php echo $row['CURP']; ?>" /><br>
            <input type="text" required NAME="colonia" id="colonia" placeholder="escribe tu colonia" value="<?php echo $row['colonia']; ?>">
            <input type="text" required NAME="calle" id="calle" placeholder="escribe tu calle" value="<?php echo $row['calle']; ?>" /><br-->
         
                
                 <button class="btn btn-primary" type="submit" value="Registrar" >Guardar</button>
                 <script scr="js/jquery-3.4.1.min.js"></script>
                 <script scr="js/bootstrap.min.js"></script>
</body>
</html>