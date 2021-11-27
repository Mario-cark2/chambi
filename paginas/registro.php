<?php

  require 'conexion.php';

  $message = '';

  if (!empty($_POST['nombre'])&& !empty($_POST['apellidos']) && !empty($_POST['email'] )) {
    $sql = "INSERT INTO usuarios (nombre,email,apellidos,Idtipousuario, password ) VALUES ( :nombre, :email,:apellidos,2, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']); 
    $stmt->bindParam(':email', $_POST['email']); 
    $password =($_POST['password'] );
    $stmt->bindParam(':password', $password);
    

    if ($stmt->execute()) {
     echo '<script>alert("Cuenta Creada")</script> ';
    } else {
    echo '<script>alert("Error de Crear")</script> ';
    }
  }
  ?>
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Registro</title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        
        <link rel="stylesheet" href="css/registro.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
      <center>
      <img src="img/aber.png" class="avatar" width="90px" height="80px">
      </center>
                    <div class="titulo">
                    <center>
                        <font face="Comic Sans MS,arial">
                        ¡REGÍSTRATE!</center>
                    </div>
                    <form action="registro.php" method="POST">
                        <input type="text" name="nombre" placeholder="Nombre" required>

                        <input type="text" name="apellidos" placeholder="Apellidos" required>
                        
                        <input type="password" placeholder="Contraseña" name="password" required>

                        <input type="text" name="email" placeholder="Correo Electronico" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Registrate</button>
                    </form>
                   
                    <div class="inferior">
                    <a href="../index.html">Volver</a>
                </div>
            </div>
        </div>
            
    </body>
</html>