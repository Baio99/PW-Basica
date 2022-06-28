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
	
	  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }

//selección de la base de datos con la que vamos a trabajar 

$codigoAlumno=$_POST['codigoAlumno'];		
$codigoCurso=$_POST['codigoCurso'];	
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update cp_inscripcion Set cur_codigo='$codigoCurso' Where alu_codigo='$codigoAlumno' ";
mysqli_query($conn,$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>

</body>
</html>