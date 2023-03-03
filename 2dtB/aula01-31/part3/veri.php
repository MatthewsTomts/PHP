<?php
    $num = $_GET['num'];

    if ($num < 0) echo "Este número é Negativo";
    else if ($num > 0) echo "Este número é Positivo";
    else echo "Este número é igual a Zero";

    echo "<br>";

    if ($num % 2 == 0) echo "Este número é Par";
    else echo "Este número é Ímpar";
?>