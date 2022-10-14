<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <h1>Manejo de sesiones</h1>
    <h2>Paso 2: se acede a la variable de sesion almacenada y se destruye</h2>
    <?php
        if(isset($_SESSION['var'])){
            $var = $_SESSION['var'];
            print("<p>Valor de sesion: $var<p>\n");
            print($_SESSION['var']);
            print ("<A HREF='lab123.php'>Paso 3 </A");
        }
        else{
            print ("Session no iniciada, ir al <A href='lab121.php'>Paso 1</A>");
        }

    ?>
</body>
</html>