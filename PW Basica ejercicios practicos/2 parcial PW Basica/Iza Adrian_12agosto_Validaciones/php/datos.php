<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/funciones.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
	
    <?php
        $year =  date("Y", strtotime($fechan)); 
    $hoy = date("Y");  
    $edad = $hoy - $year;

        $nombre=$_POST['fname'];
        $apellido=$_POST['lname'];
        $cedula=$_POST['cedula'];
        $direccion=$_POST['direccion'];
        $genero=$_POST['genero'];
        $estcivil=$_POST['estcivil'];
        $documentos=$_POST['documentos'];
       

        $nacimiento = $_POST['fechan'];
        $fechaActual = date("Y-m-d");
	     $email=$_POST['email'];
	
	
        
        echo(" <div class='caja1'>");
	
	
	
        echo "Nombre: ".$nombre;
            echo("<br>");
            echo("<br>");
        echo "Apellido: ".$apellido;
            echo("<br>");
            echo("<br>");
        echo "Cedula: ".$cedula;
            echo("<br>");
            echo("<br>");
        echo "Direccion: ".$direccion;
            echo("<br>");
            echo("<br>");
        echo "Genero: ".$genero;
            echo("<br>");
            echo("<br>");
        echo "Estado Civil: ".$estcivil;
            echo("<br>");
            echo("<br>");
        if(isset($_POST['enviar'])){
            $formatos = $_POST['documento'];
            $num = count($formatos);

            print_r('Documentos Entregados: '.$num.'<br>');
            for($n =0;$n<$num;$n++){
                print_r('*'.$formatos[$n]. '<br>');
            }
        }

            echo("<br>");

  

	
	echo "Edad:".$edad;
    echo("<br>");
	
            echo("<button><a href='../index.html'>Volver</a></button>");
            echo(" </div>");
    ?> 
</body>
</html>