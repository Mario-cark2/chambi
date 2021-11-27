<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="login-box">
      <center>
      <img src="img/aber.png" class="avatar" width="100px" height="100px">
      </center>
            <center>
            <font face="Comic Sans MS,arial">
                        ¡BIENVENIDO A CHAMBITA!</center>
                    </div>
                    <form  action="validarLogin.php" method="post">
                        <input type="text" name="email" placeholder="Correo" required>
                        
                        <input type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Iniciar sesión</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="registro.php">¿No tienes Cuenta? Regístrate</a>
                    </div>
                </div>
                <div class="inferior">
                    <a href="../index.html">Volver</a>
                    
                </div>
            </div>
        </div>
            
    </body>
</html>