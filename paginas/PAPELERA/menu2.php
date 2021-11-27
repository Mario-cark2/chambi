<?php
    require('conexion.php');
 @ $buscar=$_POST['buscar'];
  


   $query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' 


   ";
   $resultado=$conexion->query($query);
   $rows = $resultado->num_rows;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosmenugrid.css">
    <link rel="stylesheet" href="css/estilosmenuprincipal.css">
    <link rel="stylesheet" href="css/cabecera.css">
    
    <title>menu</title>
</head>
<body>
    
    <div class="contenedor">
    <header >
        
            <br>
        <div class="navega">
            <FORM ACTION="#" METHOD="POST" p>
                
          <INPUT TYPE="text" placeholder="Search"  NAME="buscar">               <img src="img/menu.png">
          
          <br><br>
          
        

    </header>
    <br>
    <center>
<div class="filtros">
<h3>Filtrar por:</h3>
<br><br>
</div>
</center>
<main>
    <div class="menu-box">
        <?php if($rows > 0) { ?>
                   
                        <?php while($row=$resultado->fetch_assoc()){ ?>
    
                         <div class="menu-box">
                            <br>
                        
                         <div class="foto-libro">   
                         <img src="avatar/chico.png" align="left" width="80" height="80">
                         <!--<img src="data:image/jpg;based64" width="250" height="300",@<?php echo base64_encode( $row['rutaFoto']);?>/>-->
                        </div>
                            <div class="descrip">
                            <h2>Nombre:</h2>
                                    <?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?> <?php echo $row['apellidoP'];?> <?php echo $row['apellidoM'];?>
                        </div> 
  
                    <br><br>

                    <img src="img/telefono.png" align="left" width="22" height="22">
                                    <?php echo $row['telefono'];?>  
                                    <br> Mas Información <a href="perfil.php"><img src="img/vermas.png">
                            <br><br><br>
                        
                        </div>
                              <br>
                               
                              
                               
                             
    
    
                              
                                
                                
                                
                         
                        <?php } ?>
                   
              
                       
            <?php } else { ?>
    
            <?php } ?>
            </div>
            </main>               
    </nav>
        
   

  

    </div>
   

<script scr="js/jquery-3.4.1.min.js"></script>
                 <!--<script scr="js/bootstrap.min.js"></script>-->
</body>


</html>