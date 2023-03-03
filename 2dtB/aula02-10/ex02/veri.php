<?php
    $cpf = $_GET['cpf'];
    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('-', '', $cpf);
    $sep = str_split($cpf, 1);
    $dig1 = $sep[9];
    $dig2 = $sep[10];
    $certo1 = false;
    $certo2 = false;

    $soma = 0;
    $j = 10;
    for ($i = 0; $i < count($sep) - 2; $i++){
        $soma += $sep[$i] * $j;
        $j -= 1;
    }

    $vDig1 = 11 - $soma % 11;
    if ($vDig1 > 9) {
        $vDig1 = 0;
    }

    if ($dig1 == $vDig1) {
        $certo1 = true;
    }

    $soma = 0;
    $j = 11;
    for ($i = 0; $i < count($sep) - 1; $i++){
        $soma += $sep[$i] * $j;
        $j -= 1;
    }

    $vDig2 = 11 - $soma % 11;
    if ($vDig2 > 9) {
        $vDig2 = 0;
    }

    if ($dig2 == $vDig2) {
        $certo2 = true;
    }

    echo 'CPF INFORMADO <br>';

    if($certo1 and $certo2) {
        session_start();
        $_SESSION["cpf"] = $cpf;
        echo "<p>É VÁLIDO.</p>
        <form action='cadastro.php' method='GET'>
            <button type='submit'>Prosseguir</button>
            <p hidden>$cpf</p>
        </form>";
    } else {
        echo 'NÃO É VÁLIDO.';
    }

    echo '
    <a href="index.php">
    <button>Voltar</button>
    </a>
    ';
?>