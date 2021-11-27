<?php
    require('conexion.php');
   
  


   @$query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' 
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
    <link rel="stylesheet" href="css/estilosmenugridperfil.css">
    <link rel="stylesheet" href="css/estilosmenuprincipal.css">
    <link rel="stylesheet" href="css/cabecera.css">
    
    <title>Perfil</title>
</head>
<body>


    <div class="contenedor">
    <header >
    <div class="wrapper">
 <div class="logo"><a href=""><img src="img/chambita2.png" width="250px" height="200px"></a></div>
            
           
            <!---</a>        <div class="navega">
            <FORM ACTION="#" METHOD="POST" p>
              
          <INPUT TYPE="text" placeholder="Search"  NAME="buscar"><BR>-->
         <br>
          

    </header>
    
    <br>
    <center>
<div class="filtros">
<h3>Perfil</h3>
<br><br>
</div>
</center>
   <main>
   
        <?php if($rows > 0) { ?>
                   
                        <?php while($row=$resultado->fetch_assoc()){ ?>
    
                         
                            
                          
                               <br><br><br>
                               <div class="foto-libro">
                               <img src="avatar/chico.png" align="left" width="250" height="250">
                           <!--- <img src="data:image/jpg;based64" width="250" height="300",@<?php echo base64_encode( $row['rutaFoto']);?>/>-->
                            </div>
                            <div class="descrip">
                            <h1>Nombre:</h1>
                                    <?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?> <?php echo $row['apellidoP'];?> <?php echo $row['apellidoM'];?>
                                
  
                    <br><br>

                    <img src="img/telefono.png" align="left" width="22" height="22">
                                    <?php echo $row['telefono'];?>
                            <br><br><br>
                        </div>

                        <div class="autor">
            <h4>Trabajos elaborados</h4>
                
            </div>
                        </div>
                              <br><br><br>   
                               
                              
                               
                             
    
    
                              
                                
                                
                                
                         
                        <?php } ?>
                   
              
                       
            <?php } else { ?>
    
            <?php } ?>
          
            </main>               

            <br><br><br>
   

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
   

  


   

<script scr="js/jquery-3.4.1.min.js"></script>
                 <script scr="js/bootstrap.min.js"></script>
</body>


</html>