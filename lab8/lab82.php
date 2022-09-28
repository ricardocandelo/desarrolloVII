<?php
    include ("class82.php");
    $obj = new Matriz();
    $obj->objMatriz = new Matriz();
    $valor;
    $valor =$_POST['cant'];
    echo $obj->cargarMatriz($valor);
?>