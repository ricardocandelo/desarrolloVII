<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.4
</head>
<body>
    <?php
        //Creacion del arreglo array("clave" => "valor")
        $personas = array("juan" => "Panama",
            "john" => "USA",
            "eica" =>"Finlandia",
            "kisanagi" => "japon"
        );
        
        //Recorrer todo el arreglo
        foreach ( $personas as $persona => $pais) 
        {
            print "$person es de $pais<br>";
        }

        //Impresion especifica
        echo "<br>".$pesonas["juan"];
        echo "<br>".$pesonas["eica"];

    ?>
</body>
</html>