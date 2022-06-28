<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Comprobar datos</title> 

</head>
<body>
<h1>Tus Datos de Formulario: </h1>
<p>Estos son los datos que nos has enviado:</p>
<?php  
echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
echo "cedula: "; echo $_POST['cedula']; echo "<br/>";
echo "E-mail: "; echo $_POST['email']; echo "<br/>";
echo "contraseña: "; echo $_POST['contras']; echo "<br/>";
echo "genero: "; echo $_POST['genero']; echo "<br/>";
echo "direccion: "; echo $_POST['direccion']; echo "<br/>";

echo "telefono: "; echo $_POST['telefono']; echo "<br/>";

echo "Estado Civil: "; echo $_POST['EstC']; echo "<br/>";

?>
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
<p>Los datos son correctos: <a href="form.html">Enviar</a>
<p>Los datos no son correctos: <a href="index.html">Volver a escribirlos</a>

</body>
</html>