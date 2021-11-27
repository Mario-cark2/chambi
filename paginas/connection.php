<?php
	$user = "root";
	$password = "";
	try{
		$connection = new PDO('mysql:host=localhost;dbname=chambita3_0',$user,$password);
		$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $ERRMODE_EXCEPTION){
	}
?>


