<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

    $conn = new mysqli("localhost", "admin", "admin", "cursoprogra");
    // Validar la conexión de base de datos.
    if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
    }

    $nombre=$_POST['nombre'];		
    $estado=$_POST['estado'];	
    //Creamos la sentencia SQL y la ejecutamos
    $sSQL="UPDATE cp_inscripcion SET cur_estado='$estado' WHERE alu_nombre='$nombre'";
    mysqli_query($conn,$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>

</html>