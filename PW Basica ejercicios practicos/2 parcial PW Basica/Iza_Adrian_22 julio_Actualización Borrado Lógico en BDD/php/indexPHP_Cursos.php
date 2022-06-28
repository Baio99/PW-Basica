<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1><div align="center">Lectura de la tabla</div></h1>
<br>
<br>
<?php
//Conexion con la base
  $nombreServidor = "localhost";
  $nombreUsuario = "admin";
  $passwordBaseDeDatos = "admin";
  $nombreBaseDeDatos = "cursoprogra";
  
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
	// Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
	 // Consulta a la base de datos.
    $query = "SELECT * FROM cp_cursos";
    $resultado = mysqli_query($conn,$query);
	
	
?>
<table align="center">
<tr>
<th>Nombre Curso</th>
	<th>Estado</th>

</tr>
<?php
//Mostramos los registros
while ($row=mysqli_fetch_array($resultado))
{
echo '<tr><td>'.$row["cur_nombre"].'</td>';
	echo '<td>'.$row["cur_estado"].'</td></tr>';

}
mysqli_free_result($resultado);
?>
</table>

<div align="center">

</div>

</body>
</html>