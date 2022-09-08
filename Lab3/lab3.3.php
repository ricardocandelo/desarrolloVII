<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3.3</title>
</head>
<body>
    <?php
    if(array_key_exists('enviar', $_POST)){
        if ($_REQUEST['Apellido'] != "")
        {
            echo "El apellido Ingresado es: $_REQUEST[Apellido]";

        }
        else {
            echo "Favor coloque el apellido";
        }
        if (['Nombre'] != "")
        {
            echo "El nombre Ingresado es: $_REQUEST[Nombre]";
    
        }
        else{
            echo "Favor coloque el nombre";
        }
    }
    else{

    ?>
    <FORM ACTION = "lab3.3.php" METHOD = "POST">
        Nombre: <INOUT TYPE = "TEXT" NAME= "Nombre"><br>
        <INPUT TYPE = "SUBMIT" NAME="enviar" VALUE="Enviar datos">
    </FORM>
    <?php
    }
    ?>
</body>
</html>