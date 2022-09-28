<?php
class Matriz{
    public  $matriz= array();  
    var $valor;
    public $prin;
    function cargarMatriz($valor){
        $this->valor=$valor;
        for($i=0; $i<$valor; $i++){
            for($j=0; $j<$valor; $j++){
            $matriz[$i][$j]=0;
            }
        }
        if ($valor % 2 == 0){
            for($i=0; $i<$valor; $i++){
            $c=$i;
            for($j=0; $j<$valor; $j++){
                $matriz[$i][$c]=1;
            }
            }
            foreach($matriz as $clave=>$valor){
                echo "<br>";
                for($i=0; $i<count($matriz); $i++){
                  for($i=0; $i<count($matriz); $i++){
                    echo "&nbsp &nbsp[ ".$valor[$i]." ]&nbsp &nbsp";
                  }
                  echo "<br>";
                }
              }
        }else
        {
          echo 'Debe ingresar un numero Par <form action="lab82.html">
          <input type="submit"  name="regresar" value="Regresar"> 
          </form>';
        } 
    }
    
}
?>