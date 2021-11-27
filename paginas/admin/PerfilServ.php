<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="img/Virtualbooks.png"/>
    <link rel="stylesheet" type="text/css" href="css/EsiloPerfilServ.css">
    <title>CHAMBITA | Admin | </title>
</head>

<body>
<header class="pegajoso"> 
		<figure class="figura">
			<img src="img/chambita.png" width="150px" height="30px" align="left">
		</figure>
	  <ul class="nav">
      <li><a href="">Agregar</a>
                <ul>
                <li><a href="FormSer.php">Trabajador</a></li>
                <li><a href="FormEmple.php">Administrador</a></li>
            </ul>
            </li>
           
            <li><a href="">Consultar</a>
                <ul>
                    <li><a href="ConsulTrab.php">Trabajador</a></li>
                    <li><a href="ConsulEmp.php">Administrador</a></li>
                    <li><a href="ConsulOfis.php">Oficios</a></li>
                </ul>
            </li>
          
            <li><a href="">Modificar</a>
                <ul>
                    <li><a href="ConsulTrab.php">Trabajador</a></li>
                    <li><a href="ConsulEmp.php">Administrador</a></li>
                    <li><a href="ConsulOfis.php">Oficios</a></li>
                </ul>
            </li>
            <li><a href="MenuPrin.html">Inicio</a>
</li>
			   
		   </ul>
	  </div>        
					  
			   </header>
          <main>
          <?php

$id=$_REQUEST['Id'];
   include("conexionuli.php");

   $query="SELECT Id,nombre,segundoNombre,apellidoP,apellidoM,edad,id_colonia,telefono,rutaFoto,rutaCA,CURP,INE,colonia,calle,oficio,obras,obras2   
   FROM servidor WHERE Id='$id'";
   $resultado= $conexion->query($query); 
   ($row=$resultado->fetch_assoc());

       ?> 


<?php  $row['Id'];?>
<div class="foto-libro">
<br><br>
<center>
 <h5><?php echo $row['oficio'];?></h5>
 </center>
 <hr>
 <center>
 <img src='<?php echo $row['rutaFoto'];?>' height="300px" width="300px" alt="">
 </center>
 <br><br>
 <article>
     <center>
        <Button  class="btn btn-outline-danger" id="btn-abrir-popup" class="btn-abrir-popup">Modificar</a>
</center>
        </article>
        <div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>CONFIRMACIÓN</h3>
				<form method="post" action="validareliminar.php?codAuto=<?php echo $codAuto; ?>" >
					<div class="contenedor-inputs">
                        Ingrese la contraseña del administrador
						<input type="password" name="password" placeholder="Contraseña" required>
					</div>
					<input type="submit" class="btn-submit" value="Modificar">
				</form>
			</div>
		</div>
        <script src="popup.js"></script> 
 
</div>
<br><br>
<div class="descrip">
                <hr>
                <h4>Información</h4>
                <hr>
             
                <b>Nombre:</b> <?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?> <?php echo $row['apellidoP'];?> <?php echo $row['apellidoM'];?>
                <br><br>
                <b>Edad:</b> <?php echo $row['edad'];?>
                 <br><br> 
                 <b>Telefono:</b> <?php echo $row['telefono'];?> 
                 <br><br>
                 <b>CURP:</b> <?php echo $row['CURP'];?> 
                 <br><br>
                 <b>Colonia:</b> <?php echo $row['colonia'];?> 
                 <br><br>
                 <b>Calle:</b> <?php echo $row['calle'];?>
                 <br><br> 
                
                 <br><br>
                 
      </div>
      <div class="disp">
          <hr>
          <hr>
          <h4>INE</h4>
        <center>
          <img src='<?php echo $row['INE'];?>'height="300px" width="500px" alt="">
</center>

      <hr>
      <h4>Antecedentes no penales</h4>
      <center>
          <img src='<?php echo $row['rutaCA'];?>'height="500px" width="400px" alt="">
</center>

</div>
<div class="infolibro">
<h4>Obra realizas</h4>

          <img src='<?php echo $row['obras'];?>'height="300px" width="400px" alt="">
        
          <img src='<?php echo $row['obras2'];?>'height="300px" width="400px" alt="">



</div>

          </main>     
          <footer class="bg-dark text-while">
        <br>
        <div class="container">
            <nav class="row">
                <!--logo-->
                <a href="#" class="col-1 text-reset text-uppercase d-flex aling-items-center"></a>
                <img src="img/secretariaTrabajo.png" width="150px" height="50px">
                <!--Menu-->

                <ul class="col-7 list-unstyled">
                    
                    <lia class="ext-reset text-uppercase d-flex aling-items-center "><a>Desarrollo de la aplicación web para contratar oficios en la Secretaría del Trabajo y Previsión Social de Guerrero, Copyright © 2021</a></li>
                </ul>   
                <!--Sub-->
       
                   
                </ul> 
                <!--Redes-->
            </nav>    
        </div>
      
                <br>
    </footer>

</body>
</html>