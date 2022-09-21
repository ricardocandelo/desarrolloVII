<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Numeros</h1>
    <?php
        for($i=0; $i<=4; $i++){?>
            <form action="lab4.3.php" method="post">
                Ingrese un numero  <input type="text" name="numero[]"><br>
        <?php }
    ?>
        <input type="submit" name="ingresar" value="Ingresar" />
    </form>
</body>
</html>


<?php
    if (isset($_POST['ingresar'])){
        $num = $_POST['numero'];
        $n = count($num);
        for($i = 0; $i < $n; $i++){
            if ($i == 0) {
                $mayor = $num[0];
            }else{
                if ($num[$i] > $mayor){
                    $mayor = $num[$i];
    
                }
            }
        }
        echo "<br>El numero mayor es :";

        echo $mayor;
    }
?>
