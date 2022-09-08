<?php
    $diametro = $_POST['diam'];
    $altura = $_POST['alt'];
    $radio = $diametro/2;
    $Pi = 3.1416;
    $volumen = $Pi*$radio*$altura;
    echo "<br> El columen del cilindro es de ". $volumen. " metros cubicos";
?>