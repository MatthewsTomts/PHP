<?php
    $num = $_GET["num"];

    if ($num >= 50) echo $num * $num;
    else echo "Valor informado é menor do que 50";
?>