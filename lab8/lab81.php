<?php
    include ("class81.php");
    $obj = new calificacionCliente();
    $obj->objcalificacion = new calificacionCliente();
    $valor;
    $valor =$_POST['cant'];
    $obj->__asignar($valor);
    echo $obj->Valoracion();

?>