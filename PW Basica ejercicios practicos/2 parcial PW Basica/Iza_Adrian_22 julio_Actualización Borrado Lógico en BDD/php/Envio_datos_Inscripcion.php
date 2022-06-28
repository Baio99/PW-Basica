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
	$fecha=$_POST['fecha'];
	$codigoAlumno=$_POST['codigoAlumno'];
	$codigoCurso=$_POST['codigoCurso'];

	
	
	echo "Codigo: ".$codigo;
	echo("<br>");
	echo "Fecha: ".$fecha;
	echo("<br>");
	echo "Codigo Alumno: ".$codigoAlumno;
	echo("<br>");
	echo "Codigo Curso: ".$codigoCurso;
	echo("<br>");
	
	
	
	?>
</body>
</html>