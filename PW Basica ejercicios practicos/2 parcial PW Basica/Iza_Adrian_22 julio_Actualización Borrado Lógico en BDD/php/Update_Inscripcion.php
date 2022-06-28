<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACTUALIZACION</title>
</head>

<body>
	
<div align="center">
<h1>Actualizar un registro</h1>
<br>
<?php
    //Conexion con la base
    $conn = new mysqli("localhost","admin","admin","cursoprogra"); 

echo '<form method="post" action="F_actualizar_Inscripcion.php">CodigoAlumno<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select alu_codigo from cp_inscripcion Order By alu_codigo";
$result=mysqli_query($conn,$sSQL);

echo '<select name="CodigoAlumno">';

//Generamos el menu desplegable
while ($row=mysqli_fetch_array($result))
{echo '<option>'.$row["alu_codigo"];}
?>
</select>
<br>
CodigoCurso<br>
<INPUT TYPE="TEXT" NAME="codigoCurso"><br>
<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</div>
</body>
</html>
