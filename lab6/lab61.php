<?php
class Cliente {
    var $nombre;
    var $numero;
    var $pelicula_alquiladas;

    function __construct( $nombre, $numero){
        $this   -> nombre = $nombre;
        $this -> numero = $numero;
        $this -> pelicula_alquiladas = array();
    }

    function __destruct()
    {
        echo "<br>destruido: " . $this->nombre;
    }

    function dame_numero() {
        return  $this->numero;
    }
}
     //Instanciamos un par de objetos cliente
     $cliente1 = new Cliente("Pepe", 1);
     $cliente2 = new Cliente("Roberto", 564);

     //motramos el numero de cada cliente creado 
     echo "<br> El identificador del cliente 1 es: ". $cliente1->dame_numero();
     echo "<br> El identificador del cliente 2 es: ". $cliente2->dame_numero();
?>