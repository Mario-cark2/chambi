<?php
    require('conexion.php');
   @$buscar=$_POST['buscar'];
  


   $query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP 
   LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' OR CURP LIKE '%".$buscar."%' 
   OR IdOficios LIKE '%".$buscar."%' OR colonia LIKE '%".$buscar."%' OR calle LIKE '%".$buscar."%'


   ";
   $resultado=$conexion->query($query);
   $rows = $resultado->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/EstiloConsServ.css">
    <title>CHAMBITA | Admin | </title>
    </head>
    <body>

    <div class="banner">

</div>
<header class="pegajoso"> 
  <figure class="figura">
      <img src="img/chambita2.png" width="100px" height="100px">
  </figure>
<ul class="nav">
         <li><a href="">Oficios</a>
             <ul>
             <li><a href="FormOficio.php">Agregar</a></li>
             <li><a href="">Consultar</a></li>
             <li><a href="">Modificar</a></li>
         </ul>
         </li>
        
         <li><a href="">Servidores</a>
             <ul>
                 <li><a href="FormSer.php">Agregar</a></li>
                 <li><a href="ConsultarServ.php">Consultar</a></li>
                 <li><a href="">Modificar</a></li>
             </ul>
         </li>
       
         <li><a href="">Empleados</a>
             <ul>
                 <li><a href="">Agregar</a></li>
                 <li><a href="">Consultar</a></li>
                 <li><a href="">Modificar</a></li>
             </ul>
         </li>
         <li><a href="">Inicio</a>
         
     </ul>
</div>        
                
         </header>

  <div class="navega">
  <FORM ACTION="#" METHOD="POST" p>
<INPUT TYPE="text" placeholder="Buscar"  NAME="buscar">
  </div>

        <br><br>
        <div class="container">
        <div class="galeria">
            <div class="title-img">
                <h3>Trabajadores</h3>
       <?php if($rows > 0) { ?>
            
           
                    <?php 
                      include("conexion.php");

                      $query="SELECT * FROM servidor";
                      $resultado= $conexion->query($query);
                      
                    while($row=$resultado->fetch_assoc()){ ?>


            <div class="box-img samsung">
            <a href="perfil3.php?Id=<?php echo $row['Id'];?>">
                       

                    <img src="img/carpintero" align="left" width="160" height="190">
                    <?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?>
                    <?php echo $row['apellidoP'];?> <?php echo $row['apellidoM'];?>
                    <h2>Oficio: </h2><?php echo $row['IdOficios'];?>
                    <img src="img/telefono.png" align="" width="22" height="22">

                                <?php echo $row['telefono'];?>
                          
                                <?php echo $row['CURP'];?>
                          
                                <?php echo $row['IdOficios'];?>
                          
                                <?php echo $row['colonia'];?>
                           
                                <?php echo $row['calle'];?>

                            
                           
                    </div>


                          
                             <td>
                            
                      <a href="modificar.php?id=<?php echo $row['Id'];?>"><img src="img/recargar.png"></a>
                      <a href="eliminar.php?id=<?php echo $row['Id'];?>"><img src="img/menos.png"></a>
                            </td>
                           
                            
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
                   
        <?php } else { ?>

        <?php } ?>
        
        
        </div>
        </div>
        </body>
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
    </html> 
    