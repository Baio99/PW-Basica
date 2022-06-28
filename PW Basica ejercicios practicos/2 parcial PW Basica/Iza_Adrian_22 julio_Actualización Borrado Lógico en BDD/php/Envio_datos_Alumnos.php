<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//declarar variables
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	
	
	
	echo "Nombre: ".$nombre;
	echo("<br>");
	echo "Apellido: ".$apellido;
	echo("<br>");
	echo "Cedula: ".$cedula;
	echo("<br>");
	echo "Direccion: ".$direccion;
	echo("<br>");
	echo "Email: ".$email;
		echo("<br>");
	echo "Telefono: ".$telefono;
	echo("<br>");
	
	
	?>
</body>
</html>