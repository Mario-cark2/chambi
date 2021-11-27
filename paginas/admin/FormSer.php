<?php 

$contraseña = ""; $usr = "root"; $bd = "chambita3_0";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>CHAMBITA | Admin | Formulario de servidor</title>
    <link rel="shortcut icon" href="img/chambita2,png"/>
</head>
<link rel="stylesheet" href="css/EstiloFormSer.css">
<body>
<div class="banner">

   </div>

 <header class="pegajoso">
 <figure class="figura">
         <img src="img/chambita2.png" width="100px" height="100px">
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
                    <li><a href="Servidor.php">Trabajador</a></li>
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
    <form id="formulario" role="form" action="RegistroServ.php" method="POST" enctype="multipart/form-data">


    <h1>Registro de trabajador</h1>
<br><br>
   
    <!---form id="formulario"-->
        <div class="form-row">
        <div class="form-group col-md-3">
                <label for="form-control">Nombre<FONT COLOR="red">* </FONT> </label>
                <input type="text" class="form-control" maxlength="10" id="titulo" name="nombre" required>
            </div>
        <div class="form-group col-md-3">
                <label for="form-control">Segundo  Nombre</label>
                <input type="text" class="form-control" maxlength="15" id="titulo" name="segundoNombre">
        </div>
        <div class="form-group col-md-3">
                <label for="form-control">Apellido Paterno<FONT COLOR="red">* </FONT></label>
                <input type="text" class="form-control" maxlength="20" id="titulo" name="apellidoP" required>
       
       
           

       </div>
       <div class="form-group col-md-3">
                <label for="form-control">Apellido Materno<FONT COLOR="red">* </FONT></label>
                <input type="text" class="form-control" maxlength="20" id="titulo" name="apellidoM" required>
       </div>
       </div>

       <div class="form-row">
       <div class="form-group col-md-2">
                <label for="form-control">Código Postal<FONT COLOR="red">* </FONT></label>
               <!-- <select class="form-control" name="id_colonia" id="id_colonia" >
                <option value="">Seleccione una opcción</option>
                <?php foreach($cp as $cp){?>
                                <?php echo "<option value='.$cp->id_colonia.'>".$cp->cp."</option>"?>    
                <?php } ?>
                </select> -->
                <input type="text" class="form-control" minlength="5" maxlength="5" id="titulo" name="cp" required>
                </div> 


       <div class="form-group col-md-3">
                <label for="form-control">Telefono<FONT COLOR="red">* </FONT></label>
                <input type="int" class="form-control" maxlength="10" id="titulo" name="telefono" required minlength="10">
           </div>
        <div class="form-group col-md-4">
                <label for="form-control">CURP<FONT COLOR="red">* </FONT></label>
                <!--<input type="text" class="form-control"  id="titulo" name="CURP" required minlength ="18" maxlength="18"> -->
                <input type="text" class="form-control"  id="titulo" name="CURP" required minlength ="18" maxlength="18" onKeyUp="this.value=this.value.toUpperCase();">
          </div>
          <div class="form-group col-md-3">
          <label for="form-control">Oficio<FONT COLOR="red">* </FONT></label>
                <input type="text" class="form-control"  id="titulo" name="oficio" required minlength ="6" maxlength="20">
                </div>

                </div>
        <div class="form-row">
          



        <div class="form-group col-md-3">
                <label for="form-control">Colonia<FONT COLOR="red">* </FONT></label>
                <input type="text" class="form-control" maxlength="35" id="colonia" name="colonia" required>
                </div>
       <div class="form-group col-md-3">
                <label for="form-control">Calle<FONT COLOR="red">* </FONT></label>
                <input type="text" class="form-control" maxlength="50" id="calle" name="calle" required>
                </div>
     
                <div class="form-group col-md-3">
                <label for="form-control">Edad<FONT COLOR="red">* </FONT></label>
                <input type="text" class="form-control" minlength="2" maxlength="2" id="calle" name="edad" required>
                </div>            
     
            <div class="form-group col-md-3">
            Identificación oficial<FONT COLOR="red">* </FONT>
            <input type="file" NAME="ide" title="seleccione una foto">
             <label alt="Label" data-placeholder="Foto"></label>
            </div>  
            </div>



            <div class="form-row">
                <div class="form-group col-md-3">
                Foto de perfil<FONT COLOR="red">* </FONT>
            <input type="file" NAME="prueba1" title="seleccione una foto">
             <label alt="Label" data-placeholder="Foto"></label>
                </div>

            

                <div class="form-group col-md-3">
                Antecedentes no penales<FONT COLOR="red">* </FONT>
            <input type="file" NAME="nopenales" title="seleccione una foto">
             <label alt="Label" data-placeholder="Foto"></label>
                </div>

            
                <div class="form-group col-md-3">
                Obra realizada<FONT COLOR="red">* </FONT>
            <input type="file" NAME="obra1" title="seleccione una foto">
             <label alt="Label" data-placeholder="Foto"></label>
                </div>
                

                <div class="form-group col-md-3">
                Obra realizada<FONT COLOR="red">* </FONT>
            <input type="file" NAME="obra2" title="seleccione una foto">
             <label alt="Label" data-placeholder="Foto"></label>
                </div>
            </div>

            

            
 <center>
                
            <button class="btn btn-outline-danger" type="submit">Registrar</button>
                </center>
            </form>
        </div>
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
    <script src="reloj.js"></script>
</body>
</html>


