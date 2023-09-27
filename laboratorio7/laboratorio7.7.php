<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos Sanchez - Laboratorio 7.7</title>
</head>
<body>
    <?php
        if(array_key_exists('enviar',$_POST)){
            include('class_lib7.6.php');
            
            $diam = $_POST['diam'];
            $altu =$_POST['altu'];

            $cil = new Cilindro($diam,$altu);

            $volumen =$cil->clac_volumen();
            $area=$cil->calc_area();

            echo "<br/> El volumen del cilindro es de ".$volumen."metros cubicos";
            echo "<br/> El area del cilindro es de ".$area." metros cuadrados";
        }
        else{
    ?>
    <form name="formularioDatos" method="post" action="laboratorio7.6.php">
        <p>Calculo de volumen y Area de un cilindro</p>
        <br>
        Introduzca el diametro en metros:
        <input type="text" name="diam" value="">
        <br>
        Introduzca la altura en metros: <input type="text" name="altu" value="">
        <br>
        <input type="submit" value="calcular" name="enviar">
    </form>
    <?php
        }
    ?>

</body>
</html>