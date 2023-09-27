<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Carlos Sanchez</title>
</head>

<body>

    <?php
        include("class_lib7.1.php");
        echo MiClase::constante . "<br>";
        $clase = New MiClase();
        $clase->mostrarConstante();
    ?>

</body>

</html>