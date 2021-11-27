


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albañil</title>
    <link rel="shortcut icon" href="img/Virtualbooks.png"/>
</head>
<!-- ink rel="stylesheet" href="css/css/bootstrap.min.css" -->
  <!--link rel="stylesheet" href="css/cabeceraperfil.css"-->
<link rel="stylesheet" href="css/libros-style.css">
       <link rel="stylesheet" href="css/piepagina.css">
    <link rel="stylesheet" type="text/css" href="css/puntuacion.css">
      <!--link rel="stylesheet" href="css/cabeceraPegajoso.css"-->
             <link rel="stylesheet" href="css/styles.css"> 
               <link rel="stylesheet" href="css/estilo1.css"> 

         
       

<body>
<!--header>                        
          <div class="wrapper2">
                         <div class="logo">
                         <a   onClick="history.go(-1);"  >
                         <img src="img/chambita2.png" width="280px"   height="50px">
                         </a>

              
                      <nav>
                             <a href="menuofi.php">Inicio</a> 
                           

        
     <a class="cerrar" href="login.php">
       Cerrar Sesion   </a>
                         </nav>

                
         </header-->
          <header class="header">
        <div class="container1 logo-nav-container">

              <img src="img/chambita2.png" width="180px"   height="70px" >

                   
            <span class="menu-icon">Ver menú</span>
     
            <nav class="navigation">
                <ul class="show"><FORM ACTION="#" METHOD="POST" p>  
            

              
                 
                    <li><a href="menuofi.php">Inicio</a></li>
                    <li><a href="login.php">Cerrar Sesion</a></li>
                 
                </ul> </nav> </div> </header>

            <?php

            $id=$_REQUEST['Id']; 
               include("conexion.php");
            
                $query="SELECT * FROM servidor WHERE Id='$id'";
                $resultado= $conexion->query($query); 
                ($row=$resultado->fetch_assoc());
                    ?> 
         <div class="wrapper"><br><br><br><br>
         <section> 
            
                
               <div class="fotoCirculo" >
               <img  class="imagen" alt=""   src="data:<?php echo $row['id']; ?>;base64,<?php echo  base64_encode( $row['rutaFoto']); ?>">
        <h3>        <?php echo $row['oficio'];?>   </h3> 
        </div>
            <br>
       
         </section>
         <section>
         <h3>Más Información</h3> 

                <hr>

                <br><br> 
                <h3>Nombre: 
                 <?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?> <?php echo $row['apellidoP'];?> <?php echo $row['apellidoM'];?>
                 </h3>
                 <h3>Edad:   <?php echo $row['edad'];?></h3>
                 <h3>Ciudad: Acapulco Gro.</h3>
 
               
    <h3>Contacto:  <img src="img/telefono.png" align="" width="22" height="22"> <?php echo $row['telefono'];?> 
    </h3> 
         </section>
         <section>
             <h3>Comentarios</h3> <p>Valoracion</p>
          
  <p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"> 
     <label for="radio1">★</label> 
   <input id="radio2" type="radio" name="estrellas" value="4"> 
    <label for="radio2">★</label>
  <input id="radio3" type="radio" name="estrellas" value="3"> 
    <label for="radio3">★</label>
   <input id="radio4" type="radio" name="estrellas" value="2">
  <label for="radio4">★</label>
   <input id="radio5" type="radio" name="estrellas" value="1">
   <label for="radio5">★</label>
  
  </p> 
               <center> 
                <textarea name="comentarios"  style="margin: 0px; width: 579px; height: 65px;" placeholder="Ingrese un comentario"></textarea>
                <br>
                <button class="btn btn-primary" type="submit" value="Registrar" >Enviar</button></center>
                <center>
         </section>
         </div>
         </body>
    
     
       <div class="Carousel">
     
        <h2 center-align>Obras Realizadas</h2> 
        <hr>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small></small>Obras</h4>
                            <picture>
                                 <img  class="contenedorImg" alt=""  width="250px" height="200px" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode( $row['obras']); ?>">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small> </small>Obras</h4>
                            <picture>
                             <img  class="contenedorImg" alt=""  width="250px" height="200px" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode( $row['obras2']); ?>">
                            </picture>
                        </a>
                    </div>
                </div>
                   <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small> </small>Obras</h4>
                            <picture>
                             <img  class="contenedorImg" alt=""  width="250px" height="200px" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode( $row['obras2']); ?>">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small> </small>Obras</h4>
                            <picture>
                                  <img  class="contenedorImg" alt=""  width="250px" height="200px" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode( $row['obras2']); ?>">
                            </picture>
                        </a>
                    </div>
                </div>

                
              
                 
               
               
               
                
                
                 
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
        
    </div>
   
             <footer class="bg-dark text-white">
       <div class="section bg-black" id="footer">
      <div class="center-align">
        <div class="section-columns" >
          <div>
            <br> </br>
             <nav class="row">
                <!--logo-->
                <a href="#" class="col-1 text-reset text-uppercase d-flex aling-items-center"></a>
                <img src="img/secretariaTrabajo.png" width="150px" height="50px">
             
                        <lia class="ext-reset text-uppercase d-flex aling-items-center "><h3 style="text-align:justify;">Desarrollo de la aplicación web para contratar oficios en la Secretaría del Trabajo y Previsión Social de Guerrero, Copyright ©️ 2021</h3></li>
             
            </nav>    
          </div>

           
        </div>
      </div>
    </div> 
    </footer>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js">  </script>
 <script src="js/scripPegajoso.js"></script>
   <script defer src="js/main.js"></script>
</body>
</html>