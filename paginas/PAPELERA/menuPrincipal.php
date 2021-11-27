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
<link rel="stylesheet" href="css/estilosmenuprincipal.css">
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
                   
                    <td><b>Nombre</b></td>
                    <td><b>Segundo Nombre</b></td>
                    <td><b>Apellido Paterno</b></td>
                   
                    <td><b>Telefono</b></td>
                    <td><b>Foto</b></td>
                    <
            

                    

                    
                    
                </tr>
                <tbody  class="cartBody">
                    <?php while($row=$resultado->fetch_assoc()){ ?>

                        <tr  align="center">

                         
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
                                <?php echo $row['telefono'];?>
                            </td>
                            <td>
                                <?php echo $row['rutaFoto'];?>
                            </td>
                           

                          
                           
                            
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
                   
        <?php } else { ?>

        <?php } ?>
<br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Phone</h4>
            <p>875847658</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>875847658</p>
        </div>
        <div class="content-foo">
            <h4>Location</h4>
            <p>875847658</p>
        </div>
        <h2 class="titulo-final">&copy; Ulises y sus amigos</h2>
</footer>
        </body>
    </html> 
    


















