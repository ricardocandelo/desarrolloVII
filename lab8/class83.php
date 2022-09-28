<?php
class Factorial{
    private $numero;
    function asignar($numero){
        $this->numero = $numero;
    }
    function getFactorial(){
        $factorial =1;
        $contador = 1;
        while ($contador <= $this->numero){
            $factorial *= $contador;
            $contador++;
        }
        return $factorial;
    }
}
?>