<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//declarar variables
	$nombre=$_GET['nombre'];

	$apellido=$_GET['apellido'];
	$email=$_GET['email'];
	$telefono=$_GET['telefono'];
	$genero=$_GET['genero'];
	
		
	
	
	echo $nombre;
	echo("<br>");
	echo $apellido;
	echo("<br>");
	echo $email;
	echo("<br>");
	echo $telefono;
	echo("<br>");
	echo $genero;
		echo("<br>");
	
	
	
	
	?>
</body>
</html>