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

echo '<form method="post" action="F_actualizar_Alumnos.php">Nombre<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select alu_nombre from cp_alumnos Order By alu_nombre";
$result=mysqli_query($conn,$sSQL);

echo '<select name="nombre">';

//Generamos el menu desplegable
while ($row=mysqli_fetch_array($result))
{echo '<option>'.$row["alu_nombre"];}
?>
</select>
<br>
Direccion<br>
<INPUT TYPE="TEXT" NAME="direccion"><br>
<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</div>
</body>
</html>
