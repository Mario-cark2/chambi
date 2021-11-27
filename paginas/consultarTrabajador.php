<?php
    require('conexion.php');
   $buscar=$_POST['buscar'];
  


   $query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' 


   ";
   $resultado=$conexion->query($query);
   $rows = $resultado->num_rows;
?>

<html>
    <head>
        <title>Consulta</title>
<link rel="stylesheet" type="text/css" href="css/estilostrabajador.css">
<link rel="stylesheet" href="css/cabecera.css">
    </head>
    <body>
<center>
        
    </center>
<br />

<center>
    <header>
    <a href="menuAdmin.html"><img src="img/regresar.png" align="left" width="40" height="40"/> </a>
<h1>Consultar trabajador</h1>


  <div class="navega">
  <FORM ACTION="#" METHOD="POST" p>
<INPUT TYPE="text" placeholder="Buscar"  NAME="buscar"><BR>
  </div>
</header>
</center>
 
        <br><br>
 
        
        <?php if($rows > 0) { ?>
        
        <table align="center" cellpadding="5px" width="100%">
       

            <thead  class="cartHeader">

    
                <tr  align="center">
                <td>id</td>
                    <td><b>Nombre</b></td>
                    <td><b>Segundo nombre</b></td>
                    <td><b>Apellido paterno</b></td>
                    <td><b>Apellido materno</b></td>
                 
                    <td><b>Télefono</b></td>
                    <td><b>Foto</b></td>
                    <td><b>CA</b></td>
                    <td><b>CURP</b></td>
                    <td><b>INE</b></td>
                    <td><b>QR</b></td>

                


                    <td><b>Acciones</b></td>
            

                    

                    
                    
                </tr>
                <tbody  class="cartBody">

                    <?php
                    
                    include("conexion.php");

                    $query="SELECT * FROM servidor";
                    $resultado= $conexion->query($query);
                    while($row=$resultado->fetch_assoc()){ ?>

                        <tr  align="center">

                        <td><?php echo $row['Id'];?></td>
                            <td>
                                <?php echo $row['nombre'];?>
                            </td>

                            <td>
                                <?php echo $row['segundoNombre'];?>
                            </td>
                            <td>
                                <?php echo $row['apellidoP'];?>
                            </td>
                            <td>
                                <?php echo $row['apellidoM'];?>
                            </td>
                           
                            <td>
                                <?php echo $row['telefono'];?>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['rutaFoto']);?>/>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['rutaCA']);?>/>
                            </td>
                            <td>
                                <?php echo $row['CURP'];?>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['INE']);?>/>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['QR']);?>/>
                            </td>



                          
                             <td>
                            
                      <a href="mostrar.php?id=<?php echo $row['Id'];?>"><img src="img/recargar.png"></a>
                      <a href="eliminar.php?id=<?php echo $row['Id'];?>"><img src="img/menos.png"></a>
                            </td>
                           
                            
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
                   
        <?php } else { ?>

        <?php } ?>


        </body>
    </html> 
    


















