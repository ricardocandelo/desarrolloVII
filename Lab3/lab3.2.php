<?php 
    $precio1 = $_POST['precio1'];
    $precio2 = $_POST['precio2'];
    $precio3 = $_POST['precio3'];
    $media = ($precio1+$precio2+$precio3) / 3;
    echo "<br> DATOS RECIBIDOS";
    echo "<br> Precio producto establecimineto 1:" .$precio1. " dolares";
    echo "<br> Precio producto establecimineto 2:" .$precio2. " dolares";
    echo "<br> Precio producto establecimineto 3:" .$precio3. " dolares";
    echo "<br> Precio producto  es de ". $media." dolares";
    
?>