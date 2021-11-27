<?php
    require('conexion.php');
   $buscar=$_POST['buscar'];
  


   $query="SELECT * FROM servidor WHERE nombre LIKE '%".$buscar."%' OR segundoNombre LIKE '%".$buscar."%' OR apellidoP LIKE '%".$buscar."%' OR apellidoM LIKE '%".$buscar."%'  OR id_colonia LIKE '%".$buscar."%'  OR telefono LIKE '%".$buscar."%' 


   ";
   $resultado=$conexion->query($query);
   $rows = $resultado->num_rows;
?>

<html>
    <head>
        <title>Consulta</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>
    <body>
<center>
        <h1> Buscar Servidor</h1>
    </center>
<br />
<a title="Regresar" href="consultarTrabajador.html"><img src="arrow.png" alt="Regresar" /></a>

 
        <br><br>
 
        
        <?php if($rows > 0) { ?>
        
        <table border=1 width='80%'>

            <thead>

    
                <tr>
                    <td><b>ID</b></td>
                    <td><b>NOMBRE</b></td>
                    <td><b>SEGUNDONOMBRE</b></td>
                    <td><b>APELLIDOPATERNO</b></td>
                    <td><b>APELLIDOMATERNO</b></td>
                    <td><b>ID_COLONIA</b></td>
                    <td><b>TELEFONO</b></td>
                    <td><b>RUTAFOTO</b></td>
                    <td><b>RUTACA</b></td>
                    <td><b>Direccion</b></td>
                    <td><b>Oficio</b></td>
                

                    <td><b>MODIFICAR</b></td>
                    <td><b>ELIMINAR</b></td>

                    

                    
                    
                </tr>
                <tbody>
                    <?php while($row=$resultado->fetch_assoc()){ ?>

                        <tr>

                            <td>
                                <?php echo $row['Id'];?>
                            </td>
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
                                <?php echo $row['apellidoM'];?>
                            </td>
                            <td>
                                <?php echo $row['id_colonia'];?>
                            </td>
                            <td>
                                <?php echo $row['telefono'];?>
                            </td>
                            <td>
                                <?php echo $row['rutaFoto'];?>
                            </td>
                            <td>
                                <?php echo $row['rutaCA'];?>
                            </td>
                            <td>
                                <?php echo $row['CURP'];?>
                            </td>
                            <td>
                                <?php echo $row['INE'];?>
                            </td>
                            <td>
                                <?php echo $row['QR'];?>
                            </td>
                            <td>
                                <?php echo $row['direccion'];?>
                            </td>
                            <td>
                                <?php echo $row['oficio'];?>
                            </td>

                          
                             <td>
                             <A HREF="modificar_memoria.php?id=<?php echo $row['id_memorias']; ?>">Modificar(proximamante)</A>    
                            </td>
                            <td>
                             <A HREF="eliminar_memoria.php?id=<?php echo $row['id_memorias']; ?>">eliminar(proximamante)</A>  
                            </td>

                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            
        <?php } else { ?>

        <?php } ?>


        </body>
    </html> 
    


















