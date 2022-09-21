<?php
class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";
    }
    final public function masTests() {
        echo "ClaseBase::masTests() llamada\n";
    }
}
class ClaseHijo extends ClaseBase {
    public function masTests() 
    {
        echo "ClaseHijo::masTests() llamada\n";
    }
}
//Me manda error porque la el metodo masTests es final,
//que solo se utiliza en la clase ClaseBase.
?>

