<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Imprimir</title>
</head>

<body>
<div class="contenedor">
	<div class="cont-tabla">
		<table>
			<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Cedula</th>
				<th>Fecha de Nacimiento</th>
				<th>Género</th>
				<th>Estado Civil</th>
				<th>Dirección</th>
				<th>Teléfono:</th>
				
			</tr>
			</thead>
			<tbody>
				<?php
				include("usuario.php");
				session_start();
				$arrays = $_SESSION['arrays'];
				
				foreach($arrays as $usuario){
					echo "<tr><td>".$usuario->getNombre()."</td>";
					echo "<td>".$usuario->getApellido()."</td>";
					echo "<td>".$usuario->getCedula()."</td>";
					echo "<td>".$usuario->getfechan()."</td>";
					echo "<td>".$usuario->getGenero()."</td>";
					
					echo "<td>".$usuario->getestC()."</td>";
					
					echo "<td>".$usuario->getDireccion()."</td>";
					echo "<td>".$usuario->getTelefono()."</td> </tr>";
					
				}
				?>
			</tbody>
		</table>
		<div class="botones">
			<a href="../index.html"><button type="button" name="volver">Volver</button></a>
		</div>
	</div>
</div>
</body>
</html>