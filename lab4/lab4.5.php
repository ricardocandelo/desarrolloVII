<?php
  
      $matriz = array();



      if(isset($_POST['enviar'])){
        $nu= $_POST['cant'];
        $c=0;
        for($i=0; $i<$nu; $i++){
          for($j=0; $j<$nu; $j++){
            $matriz[$i][$j]=0;
          }
        }


        if ($nu % 2 == 0){
          for($i=0; $i<$nu; $i++){
            $c=$i;
            for($j=0; $j<$nu; $j++){
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
          echo 'Debe ingresar un numero Impar <form action="lab4.5.html">
          <input type="submit"  name="regresar" value="Regresar"> 
          </form>';
        } 

      }

?>