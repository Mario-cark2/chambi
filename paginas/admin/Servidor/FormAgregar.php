<!--?php 

$contraseña = "ULISESmeza"; $usr = "root"; $bd = "chambita";
try{
	$con = new PDO('mysql:host=localhost;dbname=' . $bd, $usr, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

$consulta = $con->query("SELECT * FROM oficios");
$oficios = $consulta->fetchAll(PDO::FETCH_OBJ);



?-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="estilos.css">
    </head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Servidor</title>
        <link rel="shortcut icon" href=""/>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/EstiAgregar.css">
    <body>
   
    <!--<div class="logo"><a href=""><img src="img/chambita2.png" width="120px" height="120px"></a></div-->

<header>    
    <div class="wraper"></div>
    <div class="logo"><a href=""><img src="img/chambita2.png" width="120px" height="120px"></a></div>
    
<ul class="nav">
            <li><a href="">Oficios</a>
                <ul>
                <li><a href="">Agregar</a></li>
                <li><a href="">Consultar</a></li>
                <li><a href="">Modificar</a></li>
            </ul>
            </li>
           
            <li><a href="">Servidores</a>
                <ul>
                    <li><a href="">Agregar</a></li>
                    <li><a href="">Consultar</a></li>
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
<div class="logo2"><a href=""><img src="img/logosecre2.png" width="120px" height="120px"></a></div>
</div>
</header>
<br>

<main id="app" class="container-md">

    <h3>Registre un nuevo Servidor</h3>
<form class="form-inline" role="form" action="" method="POST" enctype="multipart/form-data">

    
           <div class="form-row">
               <div class="cold-md">
                <label for="form-control">Nombre</label>
                <input type="text" class="form-control" maxlength="200" id="titulo" name="nombre" required>
            </div>
            </div>

<div class="cold-md">
                <label for="form-control">Segundo  Nombre</label>
                <input type="text" class="form-control" maxlength="200" id="titulo" name="segundoNombre">
            </div>

            <div class="cold-md">
                <label for="form-control">Apellido Paterno</label>
                <input type="text" class="form-control" maxlength="200" id="titulo" name="apellidoP" required>
            </div>
    

            <div class="cold-md">
                <label for="form-control">Apellido Materno</label>
                <input type="text" class="form-control" maxlength="200" id="titulo" name="apellidoM" required>
            </div>
    </div>

    
    <div class="form-row">
        <div class="cold-md">
                <label for="form-control">Telefono</label>
                <input type="text" class="form-control" maxlength="200" id="titulo" name="telefono" required>
            </div>
    </div>
    
    <div class="cold-md">
                <label for="form-control">CURP</label>
                <input type="text" class="form-control" maxlength="200" id="titulo" name="CURP" required>
            </div>

            <div class="cold-md">
                <label for="form-control">Oficio</label>
                <select class="form-control" name="oficios" id="oficios" >
                <option value="">Seleccione un oficio</option>
                <?php foreach($oficios as $oficios){?>
                                <?php echo "<option value='.$oficios->IdOficios.'>".$oficios->oficios."</option>"?>    
                <?php } ?>
                </select>
            </div>
            <div class="form-row">
            <div class="cold-md">
                <label for="form-control">Colonia</label>
                <input type="text" class="form-control" maxlength="200" id="colonia" name="colonia" required>
            </div>

            <div class="cold-md">
                <label for="form-control">Calle</label>
                <input type="text" class="form-control" maxlength="200" id="calle" name="calle" required>
            </div>

            <div class="cold-md">
                <label for="form-control">Código Postal</label>
                <select class="form-control" name="oficios" id="oficios" >
                <option value="">Seleccione un oficio</option>
                <?php foreach($oficios as $oficios){?>
                                <?php echo "<option value='.$oficios->IdOficios.'>".$oficios->oficios."</option>"?>    
                <?php } ?>
            </div>
                </div>

            <div class="form-row">
            <div class="cold-md">
                foto
            <input type="file" NAME="rutaFoto" title="seleccione una foto ">
             <label alt="Label" data-placeholder=""></label></div></th> 

             <div class="cold-md">
             Antecedentes No Penales
            <input type="file" NAME="rutaCA" title="seleccione una foto ">
             <label alt="Label" data-placeholder=""></label></div></th>

             <div class="cold-md">
             INE
            <input type="file" NAME="INE" title="seleccione una foto ">
             <label alt="Label" data-placeholder=""></label></div></th>
                </div>

<div>
    
            
            <button class="btn btn-success" type="submit">Registrar</button>
</form>
</div>




<br><br>
<footer class="dat">
    <div class="logo"><a href=""><img src="img/secretariaTrabajo.png" width="150px" height="50px"></a></div><br>
    <div class="contac">
<p>Desarrollo de la aplicación web para contratar oficios en la
    Secretaría del Trabajo y Previsión Social de Guerrero, Copyright &copy; 2021</p>
    </div>

   
    
     <div class="widget">

<div class="fecha">
<p id="diaSemana" class="diaSemana"></p>
<p id="dia" class="id"></p>
<p>de</p>
<p id="mes" class="mes"></p>
<p>del</p>
<p id="year" class="year"></p> <br>

<p id="horas" class="horas"></p>
<p>:</p>
<p id="minutos" class="minutos"></p>
<p>:</p>
<p id="segundos" class="segundos"></p>
<p id="ampm" class="ampm"></p>
</div>

</div>
<div class="franja"><a href=""><img src="img/pie.jpg" width="1800px" height="50px"></a></div>
<script src="reloj.js"></script>
<br><br>
</footer>
    </body>
</html>