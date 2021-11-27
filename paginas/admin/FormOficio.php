<?php 

$contraseña = "ULISESmeza"; $usr = "root"; $bd = "chambita";
try{
	$con = new PDO('mysql:host=localhost;dbname=' . $bd, $usr, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/EstiloFomOficio.css">
    <title>CHAMBITA | Admin | </title>
</head>
<body>

<div class="banner">

</div>
<header class="pegajoso"> 
  <figure class="figura">
      <img src="img/chambita2.png" width="100px" height="100px">
  </figure>
<ul class="nav">
         <li><a href="">Oficios</a>
             <ul>
             <li><a href="FormOficio.php">Agregar</a></li>
             <li><a href="">Consultar</a></li>
             <li><a href="">Modificar</a></li>
         </ul>
         </li>
        
         <li><a href="">Servidores</a>
             <ul>
                 <li><a href="FormSer.php">Agregar</a></li>
                 <li><a href="ConsultarServ.php">Consultar</a></li>
                 <li><a href="">Modificar</a></li>
             </ul>
         </li>
       
         <li><a href="">Empleados</a>
             <ul>
                 <li><a href="">Agregar</a></li>
                 <li><a href="">Consultar</a></li>
                 <li><a href="">Modificar</a></li>
             </ul>
         </li>
         <li><a href="">Inicio</a>
         
     </ul>
</div>        
                
         </header>
         <main class="container-md">        
             <form class="formulario" role="form" action="RegisOficio.php" method="POST" enctype="multipart/form-data">
             <center>
    <h1>Registrar nuevo oficio</h1>
            </center>
      <div class="form-row">
        <div class="form-group col-md-3">
                <label for="form-control">Oficio</label>
                <input type="text" class="form-control" maxlength="200" id="oficios" name="oficios" required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" value="Registrar" >Registrar</button>
              
                </form>
    <section>


  
      
</main>
<footer class="bg-dark text-while">
        <br>
        <div class="container">
            <nav class="row">
                <!--logo-->
                <a href="#" class="col-1 text-reset text-uppercase d-flex aling-items-center"></a>
                <img src="img/secretariaTrabajo.png" width="150px" height="50px">
                <!--Menu-->

                <ul class="col-7 list-unstyled">
                    
                    <lia class="ext-reset text-uppercase d-flex aling-items-center "><a>Desarrollo de la aplicación web para contratar oficios en la Secretaría del Trabajo y Previsión Social de Guerrero, Copyright © 2021</a></li>
                </ul>   
                <!--Sub-->
       
                   
                </ul> 
                <!--Redes-->
            </nav>    
        </div>
      
                <br>
    </footer>
</body>
</html>