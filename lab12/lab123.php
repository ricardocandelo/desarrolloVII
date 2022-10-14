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
    <h1>Manejo de sessiones</h1>
    <h2>Paso 3: La variable ya ha sido destruida su valor se ha perdido</h2>
    <?php
        if(isset($_SESSION['var'])){
            $var = $_SESSION['var'];
        } else{
            $var = "";
        }
        print ("<p> Valor de la variable de sesion: $var</p>\n");
        session_destroy();
    ?>
    <A href="lab121.php">Volver al paso 1</A>
</body>
</html>