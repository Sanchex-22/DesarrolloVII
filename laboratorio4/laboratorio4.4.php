<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5 - Carlos Sanchez</title>
</head>
<body>
<?php

$arregloPares = array();

$cantidadPares = 0;

while ($cantidadPares < 20) {
    $numero = readline("Ingrese un número par: ");

    if ($numero % 2 == 0) {
        $arregloPares[] = $numero;
        $cantidadPares++;
    } else {
        echo "El número que ingreso es impar. Por favor, ingrese un número par.\n";
    }
}

echo "Arreglo de números pares:\n";
print_r($arregloPares);
?>

</body>
</html>