<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <h1>Eliminar cookies</h1>
    <?php
        if(isset($_COOKIE['user'])){
            setcookie('user', 1, time() + 365 * 24 * 60 * 60);
            echo "<h3>La cookie 'user' ha sido eliminada satisfatoriamente</h3><br/>";
        }
        else{
            echo "<h3>La cookie 'user' no existe</h><br/>";
        }
        if(isset($_COOKIE['contador'])){
            setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
            echo "<h3>La cookie 'contador' ha sido eliminada satisfatoriamente</h3><br/>";
        }
        else{
            echo "<h3>La cookie 'contador' no existe</h><br/>";
        }
    ?>
    <a href="lab131.php">Volver al contador de visitas</a>
    <a href="lab132">Volver al saludo a usuario</a>
</body>
</html>