<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $i=0;
        if($i<10){
        ?>
        <form action="" method="post">
            <?php }
            else{if($i==10){ ?>
        <form action="" method="post"><?php 
        }} ?>    
        <input type="text" name="numero[]" >
        <input type="submit" name="agregar" value="agregar">
        <?php 
        $agregar = $this->input->post('agregar');
        $i = count($agregar);
        print_r($i);
        ?>
    </form>
</body>
</html>

<?php 
    
?>