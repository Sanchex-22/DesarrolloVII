<?php
    session_start();
    if(isset($_REQUEST['usuario']) && isset($_REQUEST['clave'])){
        $usuario = $_REQUEST['usuario'];
        $clave = $_REQUEST['clave'];

        $salt = substr($usuario,0,2);
        $clave_crypt = crypt($clave,$salt);

        require_once("class/usuarios.php");
        $obj_usuarios = new usuarios();
        $usuario_validado = $obj_usuarios->validar_usuario($usuario,$clave_crypt);

        foreach($usuario_validado as $array_resp){
            foreach($array_resp as $value){
                $nfilas = $value;
            }
        }

        if($nfilas > 0){
            $usuario_validado = $usuario;
            $_SESSION['usuario_valido']=$usuario_validado;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php
        if(isset($_SESSION["usuario_valido"]))
        {    
    ?>
    <h1>GESTION DE NOTICIAS</h1>
    <?php
        }
        // intento fallido
        else if (isset($usuario)){
            print("");
            print("");
            print("");
        }
        // session no inciada
        else{
            print("");
            print("");
            print("");

            print("");

            print("");
            print("");
            print("");
            print("");
            print("");
            print("");

            print("");
        }
    ?>
</body>
</html>