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
    $query = "SELECT * FROM cp_usuarios";
    $resultado = mysqli_query($conn,$query);
	
	
?>
<table align="center">
<tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Usuario</th>
<th>Password</th>
	<th>Estado</th>
	
</tr>
<?php
//Mostramos los registros
while ($row=mysqli_fetch_array($resultado))
{
echo '<tr><td>'.$row["usu_nombre"].'</td>';
echo '<td>'.$row["usu_apellido"].'</td>';
	echo '<td>'.$row["usu_user"].'</td>';
	echo '<td>'.$row["usu_pass"].'</td>';

echo '<td>'.$row["usu_estado"].'</td></tr>';
}
mysqli_free_result($resultado);
?>
</table>

<div align="center">

</div>

</body>
</html>