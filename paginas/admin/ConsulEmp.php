<?php
require'conexion.php';

$where ="";

$usuarios="SELECT * FROM usuarios";
    $resUsuarios=$conexion->query($usuarios);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
    <title>CHAMBITA | Admin | </title>
    <link rel="shortcut icon" href="img/chambita2,png"/>

</head>
<link rel="stylesheet" href="css/EstiloConsEmp.css">
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
<body>
<div class="container">
<div class="row">
<h2 style="text-aling:center">Empleados</h2>
</div>
<div class="row table-responsive">
<table class="table table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo electrónico</th>
            <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $resUsuarios->fetch_array(MYSQL_ASSOC))
        {?>
          <tr>
        <td><?php echo $row['Id'];?></td>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['apellidos'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['pasadmin'];?></td>
        <td>
        <article>
        <Button  class="btn btn-outline-primary" id="btn-abrir-popup" class="btn-abrir-popup">Modificar</a>
       
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
        </td>
      

        <script src="popup.js"></script> 
        </tr>
        <?php } ?>;
        </tbody>

</table>

        </div>
</div>
<br><br>
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