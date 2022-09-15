<?php
   if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name']))
   {    
        $nombreDirectorio = "archivos/";
        $nombreArchivo = $_FILES['nombre_archivo_cliente']['name'];
        $nombreCompleto = $nombreDirectorio . $nombreArchivo;
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $tamano = $_FILES['nombre_archivo_cliente']['size'];  
        if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif"){
            if ($tamano <=1024000){
                if (is_file($nombreCompleto))
                {
                    $idUnico = time();
                    $nombreArchivo = $idUnico . "_" . $nombreArchivo;
                    echo "Archivo repetido, se cambiara el nombre a $nombreArchivo <br><br>";
                }
                move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombreArchivo);
                echo "El archivo se ha subido satisfatoriamente al directorio 
                $nombreDirectorio";
             }
             else echo "Excede el tamano permitido";
        }
        else echo "No se ha podido subir, el archivo debe ser una imagen <br>";
   }
    else echo "No se ha podido subir el archivo <br>"   
?> 