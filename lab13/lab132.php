<?php
    if (array_key_exists('enviar', $_POST)){
        $expire=time()+60*5;
        setcookie("user", $_REQUEST['visitante'], $expire);
        header("refresh:0");
    }
?>


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
    <h1>Cracion de Cookies</h1>
    <h2>La cookie "User" tendra solo 5 minuyos de duracion</h2>
    <?php
        if (isset($_COOKIE['user'])) {
            print ("<br/> Hola <b>".$_COOKIE["user"]."</b> Grcaias por visitar nuestros sitio web<br/>");

        }else{
        ?>
        <form action="lab132.php" method="post" name="formcookie">
            <br>Hola, primera vez que te vemos por nuestro sitio web ¿Como te llamas?
            <input type="text" name="vistante">
            <input type="submit" value="Gracias por identificarte" name="enviar">
        </form>
    <?php }
    ?>
    <br><A href="lab133.php">Continuar</A>
</body>
</html>