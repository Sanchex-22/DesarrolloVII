<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial CTRL+C</title>
</head>
<body>
    <h2>n pares:</h2>

    <form method="post" action="">
        <label for="numero1">Nmero 1:</label>
        <input type="text" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Nmero 2:</label>
        <input type="text" name="numero2" id="numero2" required><br><br>

        <input type="submit" name="submit" value="Crear Matriz">
    </form>

    <?php
    
     echo "LIT, voy con chat gpt, en mi casa lo resuelvo bien ";
     echo "ya lo tengo ";
     echo "iz";
     echo "aqui mismito te lo voy a poner HAHJAHJA";
     
     echo "XUXA ME QUEDE SIN INTERNET"
     
     te toco hacer eso carlos?
     RECAPACITO OPERA
    ?>
    
    <!-- COPY AQUI -->
    <!-- el mio es diferente v: lptm -->



</body>
</html>
<!-- le puedes preguntar esto a GPT:
como bicho estas escribiendo aqui sin internet NI IDEA PERO NO ME CARGA EL NAVEGADOR

    generar una matriz de tipo submatriz 2 dibujada en una dtabla. las dos filas del medio (exeptuando la primera y ultima columna)
    contendran valores aleatorios(entre 101 y 200) y los demas con 0 . la matriz debe ser N por N donde N debe ser un numero solicitado
-->


<!-- lo de CARLOS -->


<?php
// Función para generar la matriz y tabla HTML
function generarSubmatriz2Tabla($n) {
    echo '<table border="1">';
    for ($i = 0; $i < $n; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $n; $j++) {
            if (($i >= $n / 2 - 1 && $i < $n / 2 + 1) && ($j > 0 && $j < $n - 1)) {
                // Valores aleatorios en las dos filas del medio (excepto primera y última columna)
                $valor = rand(101, 200);
            } else {
                // Todos los demás con 0
                $valor = 0;
            }
            echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Solicitar N al usuario
$n = isset($_POST['n']) ? intval($_POST['n']) : 5; // Valor predeterminado 5 si no se proporciona

if ($n % 2 != 0) {
    // Verificar que N sea un número impar
    generarSubmatriz2Tabla($n);
} else {
    echo "El valor de N debe ser un número impar.";
}
?>

<!-- Formulario para ingresar el valor de N -->
<form method="POST">
    Ingrese un número impar para N: <input type="number" name="n" min="1" step="2">
    <input type="submit" value="Generar">
</form>


<!-- milord: -->
<?php
    $N = 6;

    $matriz = array();
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $matriz[$i][$j] = 0;
        }
    }

    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            if ($j == $i && $j != $N - 1) {
                $matriz[$i][$j] = rand(101, 200);
            }
        }
    }
    // esto es para poner el primer valor en 0 XD
    $matriz[0][0] = 0;

    echo "<table border='1'>";
    for ($i = 0; $i < $N; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $N; $j++) {
            echo "<td>{$matriz[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>


    <!-- APORTE DE JOSE -->
    <?php
// Función para generar la matriz y tabla HTML
function generarMatrizTabla() {
    $n= $_POST['n'];
    
    echo '<table border="1">';
    for ($i = 0; $i < $n; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $n; $j++) {
            if ($j == 1 || $j == $n - 2) {
                // Valores aleatorios en la segunda y penúltima columna
                $valor = rand(101, 200);
            } else {
                // Todos los demás con 0
                $valor = 0;
            }
            echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Solicitar N (número impar) al usuario
$n = 5; // Puedes cambiar este valor según lo que el usuario ingrese

// Generar y mostrar la matriz como una tabla HTML
generarMatrizTabla($n);
?>