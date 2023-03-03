<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if (isset($_GET['radio'])) {
        $rad = $_GET['radio'];
        if ($rad == '+') {
            echo 'A soma dos valores é: '.$num1 + $num2;
        } else if ($rad == '-') {
            echo 'A subtração do primeiro pelo segundo é: '.$num1 - $num2;
        } else if ($rad == '*') {
            echo 'A multiplicação desses números é: '.$num1 * $num2;
        } else if ($rad == '/') {
            if ($num2 == 0) {
            } else {
                echo 'A divisão desses números é: '.$num1 / $num2;
            }
        }
    }
?>