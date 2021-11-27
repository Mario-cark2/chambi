<?php
    require('conexion.php');
   @$buscar=$_POST['buscar'];
  


   $query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' OR direccion LIKE '%".$buscar."%' OR oficio LIKE '%".$buscar."%'";
   $resultado=$conexion->query($query);
   $rows = $resultado->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CHAMBITA | Admin |  </title>
	<link rel="shortcut icon" href="img/chambita2,png"/>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="css/EstiloConsServ.css">
<body>
	<header class="pegajoso"> 
		<figure class="figura">
			<img src="img/chambita2.png" width="100px" height="100px">
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
                    <li><a href="Servidor.php">Trabajador</a></li>
                    <li><a href="ConsulEmp.php">Administrador</a></li>
                    <li><a href="ConsulOfis.php">Oficios</a></li>
                </ul>
            </li>
          
            <li><a href="">Modificar</a>
                <ul>
                    <li><a href="Servidor.php">Trabajador</a></li>
                    <li><a href="ConsulEmp.php">Administrador</a></li>
                    <li><a href="ConsulOfis.php">Oficios</a></li>
                </ul>
            </li>
            <li><a href="MenuPrin.html">Inicio</a>
</li>
			   
		   </ul>
	  </div>        
					  
			   </header>
               <br><br><br>
               <div class="navega">
			<FORM ACTION="#" METHOD="POST" p>
		  <INPUT TYPE="text" placeholder="Buscar"  NAME="buscar">
			</div>
	<main class="container-md">
		
			<center>
				<h1>Lista de trabajadores</h1>
			</center>
            <?php if($rows > 0) { ?>
             <?php 
                      //include("conexion.php");
                      //$query="SELECT * FROM servidor";
                      //$resultado= $conexion->query($query); 
                    while($row=$resultado->fetch_assoc()){ ?>
	
	<div class="card" style="width: 30rem;">
		<h5 class="card-header"><?php echo $row['oficio'];?></h5>
		<div class="row">
			<div class="col-sm-5">
			<img src='vista.php?id=<?php echo $row['Id'];?>' class="p-2 m-2" alt='Img blob desde MySQL'  width="200px" height="200px">
			
			</div>
			<div class="col-sm-6">
				<div class="card-body">
			   		<p class="card-text"> <b>Nombre: </b><?php echo $row['nombre'];?><?php echo $row['segundoNombre'];?></p>
			   		<p class="card-text"> <b>Apellidos: </b> <?php echo $row['apellidoP'];?> <?php echo $row['apellidoM'];?></p>	 		
		  			<p class="card-text"> <b>Telefono: </b><?php echo $row['telefono'];?></p> 
		  			<a href="PerfilServ.php?Id=<?php echo $row['Id'];?>" class="btn btn-primary">Ver más</a>	        
	  			</div>
			</div>
			<div class="col-sm-6">
					</div>
		</div>
					</div>
		<br>
        <?php } ?>
        <?php } else { ?>

<?php } ?>

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
