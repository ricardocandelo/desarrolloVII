<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 10.2</title>
</head>
<body>
    <h1>Encuesta. resultados de la votacion</h1>
    <?php
        require_once ("class/votos.php");

        $obj_votos = new votos();
        $result_votos = $obj_votos->listar_votos();

        foreach ($result_votos as $result_votos){
            $votos1=$result_votos['votos1'];
            $votos2=$result_votos['votos2'];
        }
        $totalVotos = $votos1 + $votos2;

        print ("<table>\n");

        print ("<tr>\n");
        print ("<th>Respuesta</th>\n");
        print ("<th>Votos</th>\n");
        print ("<th>Porcentaje</th>\n");
        print ("<th>Representacion grafica</th>\n");
        print ("</tr>\n");

        $porcentaje = round(($votos1/$votos2)*100,2);
        print ("<tr>\n");
        print ("<td CLASS='izquierda'>Si</td>\n");
        print ("<td CLASS='derecha'>$votos1</td>\n");
        print ("<td CLASS='derecha'>$porcentajes%</td>\n");
        print ("<td CLASS='izquierda' width='400'><IMG src='img/puntoamarillo.gif' height='10' width='". $porcentaje*4 ."'></td>\n");
        print ("</tr>\n");

        $porcentaje = round(($votos2/$totalVotos)*100,2);
        print ("<tr>\n");
        print ("<td CLASS='izquierda'>Si</td>\n");
        print ("<td CLASS='derecha'>$votos1</td>\n");
        print ("<td CLASS='derecha'>$porcentajes%</td>\n");
        print ("<td CLASS='izquierda' width='400'><IMG src='img/puntoamarillo.gif' height='10' width='". $porcentaje*4 ."'></td>\n");
        print ("</tr>\n");

        print ("</TABLE>\n");
        print ("<p>Numero total de votos emitidos: $totalVotos </p>\n");
        print ("<p><A HREF='lab101.php'>Pagina de votaciones </A>\n");
    ?>
</body>
</html>