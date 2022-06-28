<?php

session_start();

$arraysUsuario = array();

$_SESSION['cont'] = 0;
$_SESSION['arrays'] = $arraysUsuario;

header("Location: ../index.html");

?>