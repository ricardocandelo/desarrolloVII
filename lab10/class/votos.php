<?php
    require_once dirname('modelo.php');

    class votos extends modeloCredencialesDB{

        public function __autoload() {
            parent::__construct();
        }

        public function listar_votos() {
            $instruccion = "CALL sp_listar_votos";

            $consulta=$this->db->query($instruccion);
            $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

            if ($resultado) {
                return $resultado;
                $resultado->close();
                $this->db->close();
            }
        }

        public function actualizar_votos($vosto1, $votos2){
            $instruccion = "CALL sp_actualizar_votos('".$vosto1."','" .$votos2."')";
            $actualiza=$this->db->query($instruccion);

            if ($actualiza){
                return $actualiza;
                $actualiza->close();
                $this->db->close();
            }
        }
    }
?>