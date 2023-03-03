<?php
    $_nome = "Violett";
    $_salario = 3000;
    $mes = 12;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Met gala!</title>
</head>
<body>
    <h1>Olá! Bom Dia!</h1>
    <?php
        echo date_default_timezone_get();
        echo "<br><br>hoje é dia " . date('d/m/y') . "<br><br>Agora são " . date('H:i:s') .
         "<br><br>Agora são " . date('h:i:s a');
    ?>
    <p><?php echo "<br>Meu nome é " . $_nome ?></p>
    <p><?php echo "Tenho um salario de R$" . $_salario ?></p>

    <?php
        echo "Anual: " . $_salario * $mes . "<br><br>";
        echo "Quinzena: " . $_salario / 2 . "<br><br>";
        echo "Exponencial: " . pow(6, 2) . "<br><br>";
        echo "Raiz Quadrada: " . sqrt(36). "<br><br>";
        echo "Randomico: ".rand()."<br><br>";
        echo "Randomico Interval: ".rand(1,10)."<br><br>";
        echo "Absoluto: ".abs(-10)."<br><br>";

        $prova1 = 7;
        $prova2 = 7;
        $nota = ($prova1 + $prova2) / 2;

        if ($nota < 3){
            $desempenho = "Péssimo";
        } elseif ($nota < 5) {
            $desempenho = "Ruim";
        } elseif ($nota < 7) {
            $desempenho = "Médio";
        } elseif ($nota < 8) {
            $desempenho = "Bom";
        } else {
            $desempenho = "Ótimo";
        }

        echo $desempenho
    ?>
</body>
</html>