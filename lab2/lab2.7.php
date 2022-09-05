<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleccion por Switch</title>
</head>
<body>
    <?php
        $posicion = "arriba";

        switch ($posicion) {
            case "arriba":
                echo "La variable contiene";
                echo "el valor de arriva";
                break;
            case "abajo":
                echo "La variable contiene";
                echo "el valor abajo";
                break;
            default:
            echo "La variable contiene otro valor";
            echo "distinto de arriba y abajo";

        }
    ?>
</body>
</html>