<?php
   require('conexion.php');
   @ $buscar=$_POST['buscar'];
    
  
  
     $query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' OR direccion LIKE '%".$buscar."%' OR oficio LIKE '%".$buscar."%'";
     $resultado=$conexion->query($query);
     $rows = $resultado->num_rows;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
   
    <link rel="stylesheet" href="css/estilosmenu3.css">
    <link rel="stylesheet" href="css/estilosmenuprincipal.css">
    <link rel="stylesheet" href="css/cabeceramenu.css">
   
    
    <title>menu</title>
</head>


<body>
    
 
        
<header>

<header>                        
                <!-- <div id='Buscador'>  
                         <div class='cell'><input type='search' placeholder='Busqueda...'></div>
                 </div>-->
                 <div class="wrapper">
                 <FORM ACTION="#" METHOD="POST" p>  
                         <div class="logo"><a href=""><img src="img/chambita2.png" aling="left" width="250px" height="200px"></a></div> 


                         <div class="navega"><br><br><br><br><br><br><br><br><INPUT TYPE="text" aling="right" placeholder="Search"  NAME="buscar"></a> 
         </header>
    </header>
    <br>
    <center>

       
  
<br>
</div>
<br><br><br>
</center>

<main>
   
        <?php if($rows > 0) { ?>
                   
            <?php
                            
                            
                              while($row=$resultado->fetch_assoc()){ ?>
                        
                        
                            <div class="menu-box">
                            <a href="perfil3.php?Id=<?php echo $row['Id'];?>">
                                <br>
                                
                                <?php $row['Id'];?>
                        
                         <div class="foto-libro"> 
                               <br>
                               
                                  <img src='vista.php?id=<?php echo $row['Id'];?>' alt='Img blob desde MySQL' align="left" width="180" height="200">
                              
                        </div><br>



                            <div class="descrip">  
                                <center>                                                                                                              
                            <h2>Nombre:</h2>
                            <?php echo $row['nombre'];?> <?php echo $row['segundoNombre'];?> <?php echo $row['apellidoP'];?> <?php echo $row['apellidoM'];?><br>   
                            <br>
                            <h2>Oficio:</h2><?php echo $row['oficio'];?><br>
        
                            
<img src="img/telefono.png" align="" width="22" height="22">
                                    <?php echo $row['telefono'];?> 
                                    <br>
                                    <img src="img/estrellas.png" align="" width="100" height="50">
                                    <br><br><br>
                                   
                              </center>
                                
                              </div>
                   
                              <br>
                               
                              
                               
                             
    
    
                              
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
              <p>4745857
              </p>
          </div>
          <div class="content-foo">
              <h4>Email</h4>
              <p>chambita.acapulco@gmail.com.mx</p>
          </div>
          <div class="content-foo">
              
          <h2 class="titulo-final">&copy; Chambita de acapulco</h2>
  </footer>

    
   


</body>
<script scr="js/jquery-3.4.1.min.js"></script>
                 <script scr="js/bootstrap.min.js"></script>

</html>