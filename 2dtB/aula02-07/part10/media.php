<?php
    $not1 = $_GET['not1'];
    $not2 = $_GET['not2'];
    $not3 = $_GET['not3'];
    $not4 = $_GET['not4'];

    $media = ($not1 + $not2 + $not3 + $not4) / 4;

    echo "A média do aluno foi: $media <br><br>";
    switch (true) {
        case $media < 4:
            echo "Conceito: E";
            $situação = 'Reprovado';
            break;
        case $media < 6:
            echo "Conceito: D";
            $situação = 'Reprovado';
            break;
        case $media < 7.5:
            echo "Conceito: C";
            $situação = 'Aprovado';
            break;
        case $media < 9:
            echo "Conceito: B";
            $situação = 'Aprovado';
            break;
        case $media <= 10:
            echo "Conceito: A";
            $situação = 'Aprovado';
            break;
        default:
            echo "Algo está errado";
            $situação = 'Indeterminado';
            break;
    }

    echo "<br><br> O aluno foi: $situação";
?>