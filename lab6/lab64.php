<?php 
    include ("class_lib.php");

    print Foo::$mi_static. "Value (1)<br>";

    $foo = new Foo();
    print $foo->staticValor() . "vlaue (2)<br>";

    print $foo->mi_static . " Value (3)<br>";
    //"Propiedad" no definida mi static
    // $foo::mi_static no es posible
    
    print Bar::$mi_static . "Value (4)<br>";
    $bar = new Bar();
    print $bar->footStatic() . "value (5)<br>";

?>