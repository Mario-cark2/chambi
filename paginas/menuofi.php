<?php
   require('conexion.php');
   @ $buscar=$_POST['buscar'];
    
  
  
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
    <title>Meú</title>
    <link rel="stylesheet" href="css/estilosoficios.css">
    <!--link rel="stylesheet" href="css/cabeceramenu.css"--> 
     <link rel="stylesheet" href="css/piepagina.css">
     <link rel="stylesheet" href="css/estilo1.css">
           <!--link rel="stylesheet" href="css/cabeceraPegajoso.css" -->

           
</head>
<body>
     <!--header>                        
     
    <div class="wrapper2">
                         <div class="logo">
                         <a   onClick="history.go(-1);"  >
                         <img src="img/chambita2.png" width="180px"   height="100px">
                         </a>

              
                      <nav>
                             <a href="menuofi.php">Inicio</a> 
                             <a href="#">Acerca</a>
                             <a href="#">Perfil</a>

    
        
     <a class="cerrar" href="login.html">
       Cerrar Sesion      
 
    </a>         </nav>
            <FORM ACTION="#" METHOD="POST" p>  
            

                 <div class="navega"><INPUT TYPE="text" aling="right" placeholder="Search"  NAME="buscar"></a> 
                 
              
 </header-->
   <header class="header">
        <div class="container1 logo-nav-container">

              <img src="img/chambita2.png" width="180px"   height="70px" >

                   
            <span class="menu-icon">Ver menú</span>
     
            <nav class="navigation">
                <ul class="show"><FORM ACTION="#" METHOD="POST" p>  
            

                 <div class="navega"><INPUT TYPE="text" aling="right" placeholder="Search"  NAME="buscar"></a> 
                 
                    <li><a href="#">Inicio</a></li>
                    <li><a href="login.php">Cerrar Sesion</a></li>
                 
                </ul>
            </nav>
        </div>
    </header>
 <br><br><br><br>

 <script type="text/javascript">
                 $(document).ready(function(){
                   $('#tipos').load('filtros.php');
                 });
                 </script>
<main>

   

    <div class="container">
    <script type="text/javascript">
                 $(document).ready(function(){
                   $('#tipos').load('filtros.php');
                 });
                 </script>
        <div class="galeria">
    
            <div class="title-img">
                <h3>Oficios</h3>
            </div>
            <?php if($rows >0) { ?>
                   
                   <?php
           
                   while($row=$resultado->fetch_assoc()){ ?>

            <div class="box-img samsung">
               

                    <?php $row['Id'];?>
                    <a href="perfil3.php?Id=<?php echo $row['Id'];?>">
                    <div class="uli"><br>
                    <div class="fotoCirculo" >
                  <img  class="imagen" alt=""   src="data:<?php echo $row['id']; ?>;base64,<?php echo  base64_encode( $row['rutaFoto']); ?>">
                      
                      <!--img  class="imagen" alt=""  <?php echo( $row['rutaFoto']); ?>"-->
                 </div>  </div>
                   </a>
                   <h2>Nombre:<?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?>  <?php echo $row['apellidoM'];?></h3> 
 
                    <h2>Oficio:<?php echo $row['oficio'];?> </h2>
                    
                                  <h2>Contacto <img src="img/telefono.png" align="" width="22" height="22">  <?php echo $row['telefono'];?> </h2>
                                    <br>   <br>   
                            
                                    
                
               
            </div>
            
            
            
            
            
            <?php } ?>
                   
              
                       
                   <?php } else { ?>
           
                   <?php } ?>
            
           
        </div>
 

       
</div>
 
           
                     
</main>
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
</body>
<script src="js/jquery-3.4.1.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js">  </script>
 <script src="js/scripPegajoso.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
 
    
</html>