
<?php
require('conexion.php');
$buscar=$_POST['buscar'];



$query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%'";
$resultado=$conexion->query($query);
$rows = $resultado->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosmenuPrin.css">
    <link rel="stylesheet" href="css/estilosmenuprincipal.css">

</head>
    <style type="text/css">
  .boton-chido{
    text-decoration: none;
    padding: 3px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color:  #f5b041;
    border-radius: 10px;
      border: 2px solid #0016b0;}
        
      .boton-chido:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
  }
</style>
<body>
    <div class="contenedor active" >
        <header class="header">
         <div class="contenedor-logo">
             <button id="boton-menu"></i></button>
             <a href="" class="logo"></i><span>CHAMBITA</span></a>
         </div>

         <div class="navega">
            <FORM ACTION="#" METHOD="POST" p>
          <INPUT TYPE="text" placeholder="buscar"  NAME="buscar"><BR>
            </div>
        
           
             <a class="boton-chido" href="../pagina_de_uli/index.html">hola</a> 
         </div>
        </header>



        
        <?php if($rows > 0) { ?>
        
            <table align="center" cellpadding="5px" width="100%">
           
    
                <thead  class="cartHeader">
    
        
                    <tr  align="center">
                       
                        <td><b>Nombre</b></td>
                        <td><b>Segundo Nombre</b></td>
                        <td><b>Apellido Paterno</b></td>
                       
                        <td><b>Telefono</b></td>
                        <td><b>Foto</b></td>
                        
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


        <main class="main">
            <h3 class="titulo">Recomendados</h3>
            <div class="grid-imagenes">
                <a href="" class="imagen"><img src="img/albañil.png" alt=""></a>
                  <a href="" class="imagen"><img src="img/amadecasa.png" alt=""></a>
                <a href="" class="imagen"><img src="img/carpintero.png" alt=""></a>
                <a href="" class="imagen"><img src="img/electricista.png" alt=""></a>
                <a href="" class="imagen"><img src="img/herrero.png" alt=""></a>
                                

                
            </div>
        </main>
    </div>

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



    <script src="js/main.js"></script>
</body>
</html>