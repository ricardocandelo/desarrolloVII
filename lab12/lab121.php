<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio12</title>
    <link rel="stylesheet" type="txt/css" href="css/stilo.css">
</head>
<body>
    <H1>Manejo de sesiones</H1>
    <h2>Paso 1: se crea la variable de sesion y se almacena</h2>
    <?php
        $var = "Ejemplo de sesiones";
        $_SESSION["var"] = $var;
        printf("<p> Valor de la variable de sesion: $var</p>\n");
    ?>
    <A href="lab122.php">Paso</A>
</body>
</html>