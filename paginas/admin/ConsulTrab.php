<?php
    require('conexionuli.php');
   @$buscar=$_POST['buscar'];
  


   $query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' OR direccion LIKE '%".$buscar."%' OR oficio LIKE '%".$buscar."%'";
   $resultado=$conexion->query($query);
   $rows = $resultado->num_rows;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHAMBITA | Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/EstiloConsServ.css">
</head>


<header class="pegajoso"> 
 




        
	  <ul class="nav">
<center>
      <img src="img/chambita.png" width="150px" height="30px" align="left">
</center>

      <div class="navega">
      
			<FORM ACTION="#" METHOD="POST" p>
		  <INPUT TYPE="text" placeholder="Buscar"  NAME="buscar">
			</div>

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
<center>
      <img src="img/secretaria.png" width="100px" height="50px" align="left">
</center>
		   </ul>
	  </div>        
					  
			   </header>
               <br><br>

              

<body>
    <div class="containe">
        

        <div class="galeria">
            <div class="title-img">
                <h3>Trabajadores</h3>
            </div>
            
            <?php if($rows > 0) { ?>
                <?php
           while($row=$resultado->fetch_assoc()){ ?>


            <div class="box-img samsung">
                <h5>
                    <?php echo $row['oficio'];?></h5>
                    
                   

                <?php $row['Id'];?>
                    <a href="PerfilServ.php?Id=<?php echo $row['Id'];?>">
                    <img src= <?php echo $row['rutaFoto'];?> ></a>

                    <!--?php echo $row['rutaFoto'];?-->
                  
                <!--img src='vista.php?id=<!?php echo $row['Id'];?>'  alt='Img blob desde MySQL'></a-->
                <br>
                <p><?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?> <?php echo $row['apellidoP'];?></p>
            </div>
         
            <?php } ?>
        <?php } else { ?>

<?php } ?>  
           
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/filtro.js"></script>
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