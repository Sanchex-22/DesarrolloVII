<?php

$diametro = $_POST['diametro'];
$altura = $_POST['altura'];
$radio = $diametro/2;
$pi = 3.1416;
$volumen = $pi * $radio * $radio * $altura;

echo "<br>".$volumen." metros cubicos";

?>