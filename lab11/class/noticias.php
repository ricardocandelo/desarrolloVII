<?php

require_once('modelo.php');

class noticia extends modeloCredencialesDB
{
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar_noticias()
    {
        $instruccion = "CALL sp_listar_noticias()";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las Noticias";
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function consultar_noticias_filtro($campo, $valor)
    {
        $instruccion = "CALL sp_listar_noticias_filtro('" . $campo . "','" . $valor . "')";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las noticias";
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function cantidad_noticias()
    {
        $instruccion = "CALL sp_cantidad_noticias()";
        $stmt = $this->_db->prepare($instruccion);
        $stmt->execute();
        $stmt->bind_result($cantidad);
        if ($stmt->fetch()) {
            $stmt->close();
            return $cantidad;
        } else {
            echo "Fallo al consultar la cantidad las Noticias";
        }
        $stmt->close();
        return;
    }


    public function paginacion_noticias($min, $max)
    {
        $instruccion = "CALL sp_paginacion_noticias(?, ?)";
        $resp = array();

        $stmt = $this->_db->prepare($instruccion);
        $stmt->bind_param('ii', $min, $max);
        $stmt->execute();
        $stmt->bind_result($id, $titulo, $texto, $categoria, $fecha, $imagen);

        while ($stmt->fetch()) {
            $arr = array(
                "id" => $id,
                "titulo" => $titulo,
                "texto" => $texto,
                "categoria" => $categoria,
                "fecha" => $fecha,
                "imagen" => $imagen,
            );
            array_push($resp, $arr);
        }

        //print_r($resp);
        $stmt->close();
        return $resp;
    }
}
