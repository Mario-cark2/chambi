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
   
<h1>Consultar Trabajador</h1>


  <div class="navega">
  <FORM ACTION="#" METHOD="POST" p>
<INPUT TYPE="text" placeholder="buscar"  NAME="buscar"><BR>
  </div>
</header>
</center>
 
        <br><br>
 
        
        <?php if($rows > 0) { ?>
        
        <table align="center" cellpadding="5px" width="100%">
       

            <thead  class="cartHeader">

    
                <tr  align="center">
              

                    

                    
                    
                </tr>
                <tbody  class="cartBody">
                    <?php while($row=$resultado->fetch_assoc()){ ?>

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
                                <img src="data:image/jpg;based64",<?php echo base64_encode( $row['rutaFoto']);?>/>
                            </td>
                           
                          
                           



                          
                            
                            
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
                   
        <?php } else { ?>

        <?php } ?>


        </body>
    </html> 
    


















