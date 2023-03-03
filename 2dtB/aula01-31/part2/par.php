<?php
    $num = $_GET['num'];

    if ($num < 0) echo "Este número não é positivo";
    elseif ($num % 2 == 0) echo "Este número é par";
    else echo "Este número é ímpar";
?>