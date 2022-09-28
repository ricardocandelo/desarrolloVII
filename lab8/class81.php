<?php
    class calificacionCliente{
        var $valor;
        function __asignar($valor)
        {
            $this->valor = $valor;
        }

        function Valoracion()
        {
            if ($this->valor > 80){
                echo  '<img src="img/verde.jpg" width="50" height="50" />'; 
            }
            elseif ($this->valor >=50 && $this->valor <= 80){
                echo  '<img src="img/amarillo.jpg" width="50" height="50" />'; 
            }
            else{
                echo  '<img src="img/rojo.jpg" width="50" height="50" />'; 
            }
        }
    }
?>