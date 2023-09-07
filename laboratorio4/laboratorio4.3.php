<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3 - Carlos Sanchez</title>
</head>
<body>
    <h1>Elemento Mayor en el Arreglo</h1>
    
    <?php
    $arreglo = [];
    $valores_diferentes = 20;

    for ($i = 0; $i < $valores_diferentes; $i++) {
        $valor = rand(1, 100);
        while (in_array($valor, $arreglo)) {
            $valor = rand(1, 100);
        }
        $arreglo[] = $valor;
    }

    $mayor_valor = max($arreglo);
    $posicion_mayor = array_search($mayor_valor, $arreglo);
    
    echo "<p>Arreglo:</p>";
    echo "<pre>";
    print_r($arreglo);
    echo "</pre>";

    echo "<p>El elemento mayor en el arreglo es $mayor_valor y se encuentra en la posición $posicion_mayor.</p>";
    ?>
</body>
</html>
