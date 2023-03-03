<?php
    $sal = $_GET["sal"];
    switch (true) {
        case $sal <= 1300:
            $mult = 0.35;
            break;
        case $sal <= 1750:
            $mult = 0.45;
            break;
        case $sal <= 4750:
            $mult = 0.55;
            break;
        case $sal > 4750:
            $mult = 0.65;
            break;
    }

    $aju = round($sal * $mult);
    $newS = round($sal + $aju, 2);
    echo "
    O antigo salário era: R$ $sal <br>
    O percentual usado foi: $mult% <br>
    Total de aumento foi: R$ $aju <br>
    O novo salário é: R$ $newS <br>
    <h1>TransViolett</h1>
    <img src='img/logo.png' alt='logotipo'>
    ";
?>