<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 9.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de consultar_noticias</h1>
    <?php
        require_once("class/noticias.php");

        $obj_noticias = new noticia();
        $noticias = $obj_noticias->consultar_noticias();

        $nfilas=count($noticias);
        
        if ($nfilas > 0){
            print ("<table>\n");
            print ("<tr>\n");
            print ("<th>Titulo</th>\n");
            print ("<th>Texto</th>\n");
            print ("<th>Categoria</th>\n");
            print ("<th>Fecha</th>\n");
            print ("<th>Imagen</th>\n");
            print ("</tr>\n");

            foreach ($noticias as $resultado) {
                print ("<tr>\n");
                print ("<td>".$resultado['titulo']."</td>\n");
                print ("<td>".$resultado['texto']."</td>\n");
                print ("<td>".$resultado['categoria']."</td>\n");
                print ("<td>".date("j/n-Y",strtotime($resultado['fecha']))."</td>\n");

                if ($resultado['imagen'] != "") {
                    print ("<td><A TARGET= '_blank' href='img/".$resultado['imagen'].
                    "'><IMG Border='0' src='img/iconotexto.gif'></A></td>\n");
                }
                else {
                    print ("<td>&nbsp;</td>\n");
                }
                print ("</tr>\n");
            }
                print ("</table>\n");
            
            }else  { 
            print ("no hay noticias disponibles");
        }
    ?>
</body>
</html>