<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(array_key_exists('enviar',$_POST)){
        if($_REQUEST['Apellido']!= ""){
            echo "el apellido ingresado es :". $_REQUEST['Apellido'];
        }
        else{
            echo "favor coloque el apellido";
        }
        echo"<br>";

        if($_REQUEST['Nombre']!= ""){
            echo "el nombre ingresado es :". $_REQUEST['Nombre'];
        }
        else{
            echo "favor coloque el nombre";
        }
        echo"<br>";

    }
    else{
        ?>
        <form action="laboratorio3.3.php" method="POST">
            <p>ingrese nombre y apellido</p>

            Nombre: <input type="text" name="Nombre">
            Apellido: <input type="text" name="Apellido">
            <button value="enviar datos" name="enviar" type="submit" >Enviar Datos</button>
        </form>
        <?php
    }
    
    

    ?>
</body>
</html>