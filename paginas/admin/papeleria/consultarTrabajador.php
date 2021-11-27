<?php
   $host="localhost";
   $usuario="root";
   $contraseña="ULISESmeza";
   $base="chambita";

   $conexion= new mysqli($host, $usuario, $contraseña, $base);
   if($conexion -> connect_errno){
       die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_errno());
   }
/////////////VARIABLES DE CONSULTA//////////7
   $where="";
   $nombre=$_POST['xnombre'];
   $oficios=$_POST['xoficio'];

///////////////////BOTON BUSCAR/////////////
   if(isset($_POST['buscar']))
   {
       if(empty($_POST['xoficio']))
       {
           $where="where nombre like '".$nombre."%'";
       }
       else if(empty($_POST['xnombre']))
       {
           $where="where oficios='".$oficios."%'";
       }
       else
       {
           $where="where nombre like '".$nombre."%' and oficios='".$oficios."%' ";
       }
   }

//////////////CONSULTA A BASE DE DATOS///////
   $servidor="SELECT * FROM servidor $where";
   $resServidor=$conexion->query($servidor);

   $oficios="SELECT * FROM oficios ";
   $resOficios=$conexion->query($oficios);

   //include("conexion.php");
   //@$buscar=$_POST['buscar'];
   //$query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%' OR telefono LIKE '%".$buscar."%' OR CURP LIKE '%".$buscar."%' OR IdOficios LIKE '%".$buscar."%' OR colonia LIKE '%".$buscar."%' OR calle LIKE '%".$buscar."%' ";
   //$resultado=$conexion->query($query);
   //$rows = $resultado->num_rows;   
?>

<html>
    <head>
        <title>Consulta</title>

    </head>
    <body>

<br />

<center>
    <header>
    <a href="menuAdmin.html"><img src="img/regresar.png" align="left" width="40" height="40"/> </a>
<h1>Consultar trabajador</h1>

<center>
    <form method="post">
        <input type="text" placeholder="Nombre.." name="xnombre"/>
        <select name="xoficio">
            <option value="">Oficio</option>
            <?
            while($registroOfi=$resOficios->fetch_array(MYSQLI_BOTH))
            {
                echo'<option value="'.$registroOfi['oficios'].'">'.$registroOfi['oficios'].'</option>';
            }
            ?>
        </select> 
        <button name="buscar" type="submit">Buscar</button>   
    </center>

  <!--div class="navega"-->
  <FORM ACTION="#" METHOD="POST" p>
<!--INPUT TYPE="text" placeholder="Buscar"  NAME="buscar"-->
  </div>
</header>
</center>
 
        <br><br>
 
        
        <!--?php if($rows > 0) { ?-->
        
        <table align="center" cellpadding="5px" width="100%">
       

            <thead  class="cartHeader">

    
                <tr  align="center">
                <td>id</td>
                    <td><b>Nombre</b></td>
                    <td><b>Segundo nombre</b></td>
                    <td><b>Apellido paterno</b></td>
                    <td><b>Apellido materno</b></td>
                    <td><b>Télefono</b></td>
                    <td><b>CURP</b></td>
                    <td><b>Oficio</b></td>
                    <td><b>Colonia</b></td>
                    <td><b>Calle</b></td>


                    <td><b>Acciones</b></td>
            

                    

                    
                    
                </tr>
                <tbody  class="cartBody">
                    <?php 
                      //include("conexion.php");

                      //$query="SELECT * FROM servidor";
                      //$resultado= $conexion->query($query);
                      
                    while($registroSer=$resServidor->fetch_array(MYSQLI_BOTH))
                    
                    {
                        echo'<tr>
                             <td>'.$registroSer['Id'].'</td>
                             <td>'.$registroSer['nombre'].'</td>
                             <td>'.$registroSer['segundoNombre'].'</td>
                             <td>'.$registroSer['apellidoP'].'</td>
                             <td>'.$registroSer['apellidoM'].'</td>
                             <td>'.$registroSer['telefono'].'</td>
                             <td>'.$registroSer['CURP'].'</td>
                             <td>'.$registroSer['IdOficios'].'</td>
                             <td>'.$registroSer['colonia'].'</td>
                             <td>'.$registroSer['calle'].'</td>
                             </tr>';

                    }?>
                        
                       
                             <td>
                            
                      <a href="modificar.php?Id=<?php echo $row['Id'];?>"><img src="img/recargar.png"></a>
                      <a href="eliminar.php?Id=<?php echo $row['Id'];?>"><img src="img/menos.png"></a>
                            </td>
                           

                        
                    




                            
                        </tr>
                   
                </tbody>
            </table>
        </body>
    </html> 
    


















