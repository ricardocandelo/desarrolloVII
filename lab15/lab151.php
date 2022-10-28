<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Datatable JQuery</title>
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
    <script type="text/javascrip" language="javascript" src="jquery-3.1.1.js"></script>
    <script type="text/javascrip" language="javascript" src="jquery.dataTables.min.css"></script>
</head>
<body>
    <scripts type="text/javascript">
    <h1>Consulta de consultar_noticias</h1>
    <?php
        require_once("class/noticias.php");

        $obj_noticias = new noticia();
        $noticias = $obj_noticias->consultar_noticias();

        $nfilas=count($noticias);
        
        if ($nfilas > 0){
            print ("<table id='grid' class='display' cellspacing='0'>\n");
            print ("<THEAD>");
            print ("<tr>\n");
            print ("<th>Titulo</th>\n");
            print ("<th>Texto</th>\n");
            print ("<th>Categoria</th>\n");
            print ("<th>Fecha</th>\n");
            print ("<th>Imagen</th>\n");
            print ("</tr>\n");
            print ("</THEAD>");
            print ("<TBODY>");

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
                print ("</TBODY>");
            }
                print ("</table>\n");
            
            }else  { 
            print ("no hay noticias disponibles");
        }
    ?>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#grid').DataTable( {
            "lengthMenu" :[5,10,50],
            "order": [[0,"asc"]],
            "lenguage":{
                "lengthMenu":"Mostrar _MENU_ registro por pagina",
                "zeroRecords": "No existen resultados en su busqueda",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Buscado entre _MAX_ registros en total)",
                "search": "Buscar: ",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previus": "Anterior"
                },
            }
        });
        $("*").css("font-family", "arial").css('font-size', '12px');
    });
</script>