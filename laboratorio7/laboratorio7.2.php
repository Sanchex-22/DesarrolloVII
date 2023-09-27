<?php

    include("class_lib7.2.php");
    $class1 = new ClaseConcreta1;
    $class1->printOut();
    echo $class1->prefixValor('FOO_')."<br>";

?>