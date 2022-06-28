<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
//Conexion con la base
$conn = new mysqli("localhost","admin","admin","cursoprogra");

//selección de la base de datos con la que vamos a trabajar 

$curso=$_POST['curso'];		
$direccion=$_POST['direccion'];	
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update cp_alumnos Set alu_direccion='$direccion' Where alu_curso='$curso'";
mysqli_query($conn,$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>

</body>
</html>