


<!DOCTYPE html>

<html lang='es'>
<head>

	<meta charset ="UTF-8">
	<title> index de imagenes </title>
</head>
<body>


	<center>
	<form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
		<input type="text" required name="nombre" placeholder="Nombre..." value=""/><br>
		<input type="text" required name="segundoNombre" placeholder="Nombre..."/><br>
		<input type="text" required name="apellidoP" placeholder="Apellido paterno" value=""/><br>
		<input type="text" required name="apellidoM" placeholder="Apellido materno" value=""/><br>
       
		<input type="text" required name="telefono" placeholder="Telefono" value=""/><br>
        
        <input type="file" required name="rutaFoto"/><br>
        <input type="file" required name="rutaCA"/><br><br>
        <input type="text" required name="CURP" placeholder="Ingrese su CURP" value=""/><br>
		<input type="file" required name="INE"/><br>
        <input type="file" required name="QR"/><br>
		<input type="submit" name="Aceptar"/><br>

		


	</form>

	</center>










</body>
</html>