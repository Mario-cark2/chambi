<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perfil
    </title>
    <!--link rel="stylesheet" href="css/estilosregistro.css"-->
    <link rel="stylesheet" href="css/estilosmenuprincipal.css">
    <!--link rel="stylesheet" href="css/cabecera.css"-->
    <link rel="stylesheet" href="css/estilosmenugridperfil.css">

  </head>

  <body>

  <header >
    <div class="contenedor">
        <div class="wrapper"></div>
    <div class="logo"><a href=""><img src="img/chambita2.png" align="left" width="250px" height="200px"></a></div>
       
           
                
         
          </div>
          <br><br>
          
        

    </header>
    <br><br><br><br>
      <main>
  <center>

      <?php

$id=$_REQUEST['Id'];
   include("conexion.php");

    $query="SELECT * FROM servidor WHERE Id='$id'";
    $resultado= $conexion->query($query);
    ($row=$resultado->fetch_assoc());
        ?>

      <!--<form action="modificar_proceso.php?id=<@?php echo $row['id'];?>" method="POST"-->
      
      <div class="menu-box">
      <h>Mostrar</h>
                                <br>
                                <center>
                                @<?php echo $row['Id'];?>
                        
                         <div class="foto-libro">
                           <h1>Perfil</h1>
                         <img src="avatar/chico.png" align="" width="250" height="300">  </div>
                         <!--<img src="data:image/jpg;based64" width="250" height="300",@<?php echo base64_encode( $row['rutaFoto']);?>/>-->
                        
                        <div class="descrip">
                            <h4>Nombre:</h4>
                                    <?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?> <?php echo $row['apellidoP'];?><?php echo $row['apellidoM'];?>
                          <img src="img/telefono.png" align="" width="22" height="22"><?php echo $row['telefono'];?>  
                          </div>

                          <div class="autor">
                            Valoracion:
                          </div>
                        </center>
                   
                              <br>
                               
                              
                               
                             
</div>
    
                              
                  
        

       
      
      

</center>
</main>
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