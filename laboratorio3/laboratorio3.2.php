<?php
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
$media = ($precio1+$precio2+$precio3/3);
echo ("<br> datos recibidos");
echo ("<br> el precio del producto 1 es de".$precio1."dolares");
echo ("<br> el precio del producto 2 es de".$precio2."dolares");
echo ("<br> el precio del producto 3 es de".$precio3."dolares");
echo ("<br> el precio medio del producto es de".$media."dolares");
?>