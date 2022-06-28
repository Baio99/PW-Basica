<?php

include("usuario.php");

session_start();

$nombre1 = $_POST['nombre'];
$apellido1 = $_POST['apellido'];
$cedula1 = $_POST['cedula'];
$fechan1 = $_POST['fechan'];
$genero1 = $_POST['genero'];
$estC1 = $_POST['estC'];
$direccion1 = $_POST['direccion'];
$telefono1 = $_POST['telef'];


$cont = $_SESSION['cont'];
$arrays = $_SESSION['arrays'];

$usuario = new usuario($nombre1, $apellido1, $cedula1, $fechan1,  $genero1, $estC1,  $direccion1, $telefono1);

array_push($arrays, $usuario); 

$cont++;

$_SESSION['cont'] = $cont;
$_SESSION['arrays'] = $arrays;

header("Location: ../index.html");
?>

