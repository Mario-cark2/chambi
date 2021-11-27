<?php


$email =$_POST['email'];
$clave   =$_POST['contrasena'];

//conectar a BD
$conexion=mysqli_connect("localhost", "root", "", "chambita3_0");

$consulta="SELECT * FROM usuarios WHERE email='$email' AND contrasena='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:menuprincipal.html");
    
}else{
    echo"error en la autentificación";
}
    mysqli_free_result($resultado);
    mysqli_close($conexion);
 

?>