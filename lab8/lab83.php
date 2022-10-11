<?php
    include ("class83.php");
    $fact = new Factorial();
    $num;
    $num =$_POST['num'];
    $fact->asignar($num);
    echo "Factorial ".$fact->getFactorial();
?>