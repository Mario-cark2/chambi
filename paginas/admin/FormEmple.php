<?php 

$contraseña = ""; $usr = "root"; $bd = "chambita3_0";
try{
	$con = new PDO('mysql:host=localhost;dbname=' . $bd, $usr, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}


$consulta = $con->query("SELECT * FROM tipousuario");
$tu = $consulta->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>CHAMBITA | Admin | Formulario de Empleado </title>
    <link rel="shortcut icon" href="img/chambita2,png"/>
    <link rel="stylesheet" href="css/EstiloFormEmple.css">
</head>
<body>
<div class="banner">

</div>

<header class="pegajoso">
<figure class="figura">
      <img src="img/chambita.png" width="150px" height="30px" align="left">
  </figure>
 <ul class="nav">
 <li><a href="">Agregar</a>
                <ul>
                <li><a href="FormSer.php">Trabajador</a></li>
                <li><a href="FormEmple.php">Administrador</a></li>
            </ul>
            </li>
           
            <li><a href="">Consultar</a>
                <ul>
                    <li><a href="ConsulTrab.php">Trabajador</a></li>
                    <li><a href="ConsulEmp.php">Administrador</a></li>
                    <li><a href="ConsulOfis.php">Oficios</a></li>
                </ul>
            </li>
          
            <li><a href="">Modificar</a>
                <ul>
                    <li><a href="ConsulTrab.php">Trabajador</a></li>
                    <li><a href="ConsulEmp.php">Administrador</a></li>
                    <li><a href="ConsulOfis.php">Oficios</a></li>
                </ul>
            </li>
            <li><a href="MenuPrin.html">Inicio</a>
</li>
     </ul>
</div>

</header>
<br><br>


<main class="container-md">

<form id="formulario" role="form" action="RegistrarEmp.php" method="POST" enctype="multipart/form-data">


<h1>Registro de empleado</h1>
<br><br>

<div class="form-row">
<div class="form-group col-md-4">
                <label for="form-control">Nombre</label>
                <input type="text" class="form-control"  id="nombre" name="nombre"  required minlength ="4" maxlength="30"> 
</div>

<div class="form-group col-md-4">
                <label for="form-control">Apellidos</label>
                <input type="text" class="form-control"  id="apellidos" name="apellidos" required minlength ="10" maxlength="30">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-2">
                <label for="form-control">Tipo de Usuario</label>
                <select class="form-control" name="Idtipousuario" id="Idtipousuario" >
                <option value="">Seleccione una opcción</option>
                <?php foreach($tu as $tu){?>
                                <?php echo "<option value='.$tu->Idtipousuario.'>".$tu->tipousuario."</option>"?>    
                <?php } ?>
                </select>
</div>

<div class="form-group col-md-3">
                <label for="form-control">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required minlength ="8" maxlength="12">
                </div>

<div class="form-group col-md-3">
                <label for="form-control">Correo electrónico</label>
                <input type="email" class="form-control"  id="email" name="email" required minlength ="10" maxlength="30">
</div>
 

<div class="form-group col-md-3">
                <label for="form-control">Contraseña</label>
                <input type="password" class="form-control"  id="pasadmin" name="pasadmin" required required minlength ="8" maxlength="12">
                </div>
                </div>
<br><br>
               
                    <center>
                    <button class="btn btn-outline-primary" type="submit">Registrar</button>
                </center>
            
                
 

</form>
</div>
</main>
<br><br>
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