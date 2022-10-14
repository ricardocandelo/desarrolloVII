<?php
if (isset($_COOKIE['contador']))
{
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 *60);
    $mensaje = 'Gracias por visitarnos. Numero de visitas: '.$_COOKIE['contador'];
}else{
    //Caduca en un a;o
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Bienvenido a nuestro sitio web';
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
    <h1>Contado de visitas con Cookies</h1>
    <H3><?php echo $mensaje; ?></h3>
</body>
</html>