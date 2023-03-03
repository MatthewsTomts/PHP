<?php
    $not1 = $_GET["not1"];
    $not2 = $_GET["not2"];
    $not3 = $_GET["not3"];
    $name = $_GET["name"];

    $med = ($not1 + $not2 + $not3) / 3;
    $result = '';
    if ($med >= 80) {
        $resul = "Aprovado";
    } elseif ($med >= 50) {
        $resul = "Recuperação";
    } else {
        $resul = "Reprovado";
    }

    echo "
    <img src='img/senai.png' alt='Logo Senai'>
    <p>Nome do Aluno: $name</p>
    <p>Notas Obtidas</p>
    <p>Av1- $not1</p>
    <p>Av2- $not2</p>
    <p>Av3- $not3</p>
    <p>Media = $med</p>
    <p>O Aluno foi $resul</p>
    ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>