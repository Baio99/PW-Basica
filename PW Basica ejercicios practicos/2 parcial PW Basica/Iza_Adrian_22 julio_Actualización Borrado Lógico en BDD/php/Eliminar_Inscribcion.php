<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ELIMINACION</title>
</head>

<body>
	
<div align="center">
<h1>Eliminar un registro</h1>
<br>
<?php
    //Conexion con la base
    $conn = new mysqli("localhost","admin","admin","cursoprogra"); 

echo '<form method="post" action="F_eliminar_Inscribcion.php">Codigo<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select alu_codigo from cp_inscripcion Order By alu_codigo";
$result=mysqli_query($conn,$sSQL);

echo '<select name="nombre">';

//Generamos el menu desplegable
while ($row=mysqli_fetch_array($result))
{echo '<option>'.$row["alu_codigo"];}
?>
</select>
<br>
Desactivar Usuario<br>
<select name="estado" id="idestado">
    <option value="1">Activo</option>
    <option value="0">Inactivo</option>
</select>
<br>
<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</div>
</body>
</html>