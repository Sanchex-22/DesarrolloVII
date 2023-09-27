<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("class_lib7.3.php");
        $temp1= new Template;
        $prueba = "valor de prueba";

        $temp1->ponerVariable("var1","valor 1");
        $temp1->ponerVariable("var2","valor 2");
        $temp1->ponerVariable("var3","valor 3");

        echo $temp1->verHtml($prueba);
    ?>
</body>
</html>