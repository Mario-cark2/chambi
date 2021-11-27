
<?php
//include("connect_db.php");

//$miconexion = new connect_db;

/*
--------------------------------------------------------
A continuación se está realizando lo siguiente:
Edita el documento de VALIDARLOGIN.PHP y así clasificar 
los roles, para ello se editaran variables.

1. Se está trabajando en la línea 30, necesito saber cómo funciona la variable $MYSQLI
y sustituirla por $CONEXION
______________________________________________________________
| R 	E	S	O	L	U	C	I	O	N		F	I	N	A	L	:
| Se creo un bloque para ADMIN y USUARIO,
| Se utiliza el documento CONEXION.PHP para realizar las conexiones a la BD,
| Aún no defino como funciona el session_start();,
| Se agrego un campo a la tabla usuarios de la BD llamado PASADMIN en donde está alojada la contraseña del ADMIN y así consultar y canalizar a su interfaz,
|
|P E N D  I E N T E * Agregar bloque del usuario*
|https://www.youtube.com/watch?v=q4cT-J7MYvk
|_____________________________________________________________
*/

session_start(); 
	// 1 require("connect_db.php");
	require("conexion.php");
	$email=$_POST['email'];
	$pass=$_POST['password'];

//------------------------------------------------VERIFICADO


//-----------------------------------------------------------------------------------------------------------REVISAR VARIABLE $MYSQLI

$sql2=mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email'"); //2
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){   //-------------------------------------------------- 3 Se agrego campo PASADMIN, se elimino contenido campo contrasena
			$_SESSION['Id']=$f2['Id'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['Idtipousuario']=$f2['Idtipousuario'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin/MenuPrin.html'</script>";
		
		}
		else {
			echo "ERROR";
		}
	}


//-------------------------------------------------------------------------------------------------------------------------------------
	

$sql=mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
		 
			$_SESSION['email']=$f['email']; 

			header("Location: menuofi.php");
		}
		
		else{
			echo '<script>alert("CONTRASE�A INCORRECTA")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='registro.php'</script>";	

	}



	?>