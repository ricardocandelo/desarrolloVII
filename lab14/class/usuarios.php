<?php
    require_once('modelo.php');
    class usuarios extends modeloCredencialesDB{

        public function __construct(){
            parent:: __construct();
        }

        public function validar_usuario($usr, $spwd){
            
            $instruccion = "CALL sp_validar_usuario('".$usr."','".$spwd."')";
            
            $consulta = $this->_bd->query($instruccion);
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
            if($resultado){
                return $resultado;
                $resultado->close();
                $this->_db->close();
            }
        }
    }
?>