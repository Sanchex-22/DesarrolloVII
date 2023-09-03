<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>laboratorio2.7 - Carlos Sanchez</title>
</head>
<body>
    <?php
    $posicion = "arriba";

    switch($posicion)
    {
        case "arriba":
            echo "La variable contiene ";
            echo "el valor arriba ";
            break;

        case "abajo":
            echo "La variable contiene ";
            echo "el valor abajo ";
            break;

        default:
            echo "La variable contiene otro valor ";
            echo "distinto de arriba y abajo ";
    }
    
    ?>
</body>
</html>