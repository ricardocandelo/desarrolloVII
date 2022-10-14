
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
    <h1>Recuperar valor de una Cookie</h1>
    <?php
        if(isset($cookie['user']))
        echo "<h2>Binvenido ".$_COOKIE['user']."!</h2><br/>";
        else 
        echo "<h2>Binvenido invitado!</h2><br/>";
    ?>
    <a href="lab131.php">...Regresar</a>&nbsp;
    <a href="lab134.php">Continuar</a>
</body>
</html>