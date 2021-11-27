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
    <div class="container">        	
        <div class="trabajadores">
            <div class="title-img">
                <h3>Trabajadores</h3>
            </div>

            <?php if($rows > 0) { ?>
             <?php
        while($row=$resultado->fetch_assoc()){ ?>

            <div class="box-img trabajador">
                <h5><?php echo $row['oficio'];?></h5>
                <img src='vista.php?id=<?php echo $row['Id'];?>'  alt='Img blob desde MySQL'>
                <p><b>Nombre: </b><?php echo $row['nombre'];?><?php echo $row['segundoNombre'];?></p>
            </div>
            
            <?php } ?>
        <?php } else { ?>

<?php } ?>
        </div>
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
