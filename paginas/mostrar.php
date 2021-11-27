<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<head>
    <h1>Mostrar Trabajador</h1>
    <?php

$id=$_REQUEST['id'];
   include("conexion.php");

    $query="SELECT * FROM usuarios WHERE id='$id'";
    $resultado= $conexion->query($query);
    ($row=$resultado->fetch_assoc());
        ?>


<form action="modificar_proceso.php?id=<?php echo $row['Id'];?>" method="POST">


                        <td><?php echo $row['Id'];?></td>
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
                                <?php echo $row['telefono'];?>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['rutaFoto']);?>/>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['rutaCA']);?>/>
                            </td>
                            <td>
                                <?php echo $row['CURP'];?>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['INE']);?>/>
                            </td>
                            <td>
                                <img src="data:image/jpg;base64",<?php echo base64_encode($row['QR']);?>/>
                            </td>
</head>
<body>

    
</body>
</html>