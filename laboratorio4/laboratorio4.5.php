<!DOCTYPE html>
<html>
<head>
    <title>Matriz Identidad Generada</title>
</head>
<body>
    <h1>laboratorio4.5 - Carlos Sanchez</h1>
    
    <?php
    // Verificar si se ha enviado el formulario y el valor de N es par
    if (isset($_POST['orden'])) {
        $orden = intval($_POST['orden']);

        if ($orden % 2 == 0) {
            echo "<p>Matriz Identidad de orden $orden:</p>";
            echo "<table border='1'>";
            
            for ($i = 0; $i < $orden; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $orden; $j++) {
                    if ($i == $j) {
                        echo "<td>1</td>";
                    } else {
                        echo "<td>0</td>";
                    }
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>El valor de N debe ser un número par.</p>";
        }
    }
    ?>
    
    <p><a href="laboratorio4.5.html">Volver al formulario</a></p>
</body>
</html>
