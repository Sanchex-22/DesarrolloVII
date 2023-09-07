<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio4.2 - Carlos Sanchez</title>
</head>
<body>
    <h1>Calculadora de Factorial</h1>
    
    <?php
    // Función para calcular el factorial.
    function factorial($n) {
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    // Verificar si se ha enviado el formulario.
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if (is_numeric($numero) && $numero >= 0) {
            $resultado = factorial($numero);
            echo "<p>El factorial de $numero es $resultado.</p>";
        } else {
            echo '<p>Por favor, ingrese un número válido no negativo.</p>';
        }
    }
    ?>

    <form method="post">
        <label for="numero">Ingrese un número para calcular el factorial:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular Factorial">
    </form>
</body>
</html>
