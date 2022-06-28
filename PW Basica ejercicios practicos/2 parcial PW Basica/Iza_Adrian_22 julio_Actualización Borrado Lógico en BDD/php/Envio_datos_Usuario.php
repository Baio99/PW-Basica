<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//declarar variables
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$user=$_POST['user'];
	$password=$_POST['password'];
	$telefono=$_POST['telefono'];
	
	
	echo "Codigo: ".$codigo;
	echo("<br>");
	echo "Nombre: ".$nombre;
	echo("<br>");
	echo "Apellido: ".$apellido;
	echo("<br>");
	echo "User: ".$user;
	echo("<br>");
	echo "Password: ".$password;
		echo("<br>");
	echo "Telefono: ".$telefono;
	echo("<br>");
	
	
	?>
</body>
</html>