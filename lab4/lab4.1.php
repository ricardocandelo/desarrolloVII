<?php 
    $valor = $_POST['valor'];
    echo "<br> DATOS RECIBIDOS";
    echo "<br> el valor es:" .$valor. " dolares <br>";
    if ($valor > 80){
        echo  '<img src="img/verde.jpg" width="50" height="50" />'; 
    }
    elseif ($valor >=50 && $valor <= 80){
        echo  '<img src="img/amarillo.jpg" width="50" height="50" />'; 
    }
    else{
        echo  '<img src="img/rojo.jpg" width="50" height="50" />'; 
    }
    

    
?>