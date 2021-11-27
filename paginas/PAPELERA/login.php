<?php
include_once 'conexion.php';

session_start();

if(isset($_GET['cerrar_sesion'])){
  session_unset();

  session_destroy();

}
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: ');
        break;

        case 2:
            header('location: ');
        break;

        default:
    }
}
if(isset($_POST['email']) && isset($_POST['contrasena'])){
    $username = $_POST['email'];
    $password = $_POST['contrasena'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE email = :username AND contrasena = :password');
    $query->execute(['email' => $username, 'contrasena' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
        //validar tipo_usuario
    }else{
        // no existe usuario
        echo"El usuario o contraseña son incorrectos";
    }

}

?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login </title>
    <link rel="stylesheet" href="css/estiloslogin.css">
  </head>
  <body>

    <div class="login-box">
      <img src="img/logochambita.png" class="avatar" alt="Avatar Image">
      <h1>Inicio de sesión</h1>
     
      <form action="#" method="post">
        <!-- USERNAME INPUT -->
          
        <label for="username">Nombre de Usuario</label>
        <input type="text" name="email" required="" placeholder="Ingrese el nombre de usuario">
      
          <!-- PASSWORD INPUT -->
       
          <label for="password">Contraseña</label>
        <input type="password" name="contrasena" required="" placeholder="Ingrese la contraseña">
        <input type="submit" value="Iniciar sesión">
       
        <input type="submit" value="Registrarse">
        
      </form>
    </div>
  </body>
</html>
 



