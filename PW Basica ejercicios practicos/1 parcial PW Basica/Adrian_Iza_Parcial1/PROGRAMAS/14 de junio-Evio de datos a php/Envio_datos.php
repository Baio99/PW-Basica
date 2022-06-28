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
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$genero=$_POST['genero'];
		
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