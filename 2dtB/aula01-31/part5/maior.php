<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $text = "O maior número digitado: ";

    if ($num1 == $num2 or $num2 == $num3 or $num1 == $num3)
        echo "Digite números diferentes!";
    elseif ($num1 > $num2 and $num1 > $num3)
        echo $text.$num1;
    elseif ($num2 > $num1 and $num2 > $num3)
        echo $text.$num2;
    else
        echo $text.$num3;
        
?>