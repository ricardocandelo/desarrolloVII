<?php
    session_start();

    if (isset($_REQUEST['usuario']) && isset($_REQUEST['clave']))
    {
        $usuario = $_REQUEST['usuario'];
        $clave = $_REQUEST['clave'];

        $salt = substr ($usuario, 0, 2);
        $clave_crypyt = crypt($clave, $salt);

        require_once("class/usuarios.php");

        $obj_usuario = new usuarios();
        $usuario_validad = $obj_usuario->validar_usuario($usuario, $clave_crypyt);

        foreach ($usuario_validad as $array_resp){
            foreach($array_resp as $value){
                $nfilas=$value;
            }
        }

        if ($nfilas > 0){
            $usuario_validad = $usuario;
            $_SESSION["usuario_valido"] = $usuario_validad;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 14 Login al sitio de Noticias</title>
    <link REL="stylesheet" TYPE="text/css" HREF="css/stilo.css">
</head>
<body>
    <?php
        //sesion iniciada
        if (isset($_SESSION['usuario_valido'])){
            ?>
            <h1>Gestion de noticias</h1>
            <hr>

            <ul>
                <li><a href="lab142.php">Listar todas las noticias</a></li>
                <li><a href="lab143.php">listar noticias por parte</a></li>
                <li><a href="lab144.php">Buscar noticias</a></li>
            </ul>
            <hr>
            <p>[ <a href="logout.php">Desconectar</a> ]</p>
            <?php
    
        }elseif (isset($usuario)){
            print("<BR><br>\n");
            print("<p ALIGN='CENTER'>Acceso no aotorizado");
            print("<p ALIGN='CENTER'>[ <A HREF='login.php'>Conectar</a> ] </p>\n");
        }else{
            print("<br><br>\n");
            print("<p   class='parrafocentrado'>Esta zona tien el acceso restringido.<br>"." Para entrar debe identificarse</p>\n");
            print("<Form class='entrada' NAME='login' action='Login.php' Method='POST'>\n");
            print("<p><label class='etiqueta-entrada'>Usuario</label>\n");
            print("<input type='TEXT' name='usuario' size='15'<\p>\n");
            print("<p><label class='etiqueta-entrada'>Clave</label>\n");
            print("<input type='PASSWORD' name='clave' size='15'<\p>\n");
            print("<p><input type='submit' value='entrar'></p>\n");
            print("</form>\n");

            print("<p CLASS='parrafocentrado'> NOTA: si no dispone de identificacion o tiene problema " . 
            "Para entrar<br>Pongase en contado con el".
            "<A href='MAILTO:webmaster@localhost'>administrador</A> del sitio</p>\n");

        }

        //Sesion no iniciada
    ?>
</body>
</html>