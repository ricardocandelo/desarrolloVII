<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 16.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de sevicios Web de Conversion de Temperatura</h1>
    <form action="lab161.php" method="post" name="FormConv">
        <br>
        Convertir desde <select name="temp" id="">
            <Option value="Ctof" selected>°C a °F </Option>
            <Option value="FtoC">°F a °C</Option>
        </select> el valor
        <input type="number" name="valor" id="" step="Any" require>
        <input type="submit" value="Convertir" name="Convertir">
    </form>
    <?php
        $servicio="https://www.w3schools.com/xml/tempconvert.asmx?wsdl";
        $parametro = array();
        if (array_key_exists('Convertir', $_POST)){
            $valor = $_POST['valor'];
            $temp= $_POST['temp'];
            if ($temp=="Ctof"){
                $parametro['Celsius']=$valor;
                $cliente = new SoapCLient ($servicio, $parametro);
                $resultObj = $cliente->CelsiusToFahrenheit($parametro);
                $resultado = $resultObj->CelsiusToFahrenheitResult;
            }else{
            $parametro['fahrenhei']=$valor;
            $cliente = new SoapCLient ($servicio, $parametro);
            $resultObj = $cliente->FahrenheitCelsius($parametro);
            $resultado = $resultObj->FahrenheitCelsiusResult;
        }
            print ("<br>La temperature $valor".substr($temp,0,1)."es igual a $resultado".substr($temp,3,1));

        }
    ?>
</body>
</html>