<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
$nombre = $_POST['nombre'];


  // Datos para conectar a la base de datos.
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
 $query = "INSERT INTO `cp_cursos`(`cur_nombre`) VALUES('$nombre')";
  $resultado = mysqli_query($conn,$query);
  //Verifica que la consulta se realizo con o sin coincidencias en la base 
   if($resultado){
  	echo 'El usuario fue ingresado correctamente';
	   header ("location: ../html/Error.html");
  }
   else
   {
	   	echo 'El usuario no fue ingresado correctamente';
	   header ("location: ../html/Error2.html");
   }
?>