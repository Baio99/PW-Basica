<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	
	isset($_GET["nombre"]) ? print $_GET["nombre"] : "";
	isset($_GET["email"]) ? print $_GET["email"] : "";
	isset($_GET["telefono"]) ? print $_GET["telefono"] : "";
	isset($_GET["genero"]) ? print $_GET["genero"] : "";
	
	
	?>
</body>
</html>