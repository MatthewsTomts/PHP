<?php
    session_start();
    $cpf = $_SESSION['cpf'];
    $nome = $_GET['nome'];
    $end = $_GET['end'];
    $email = $_GET['email'];
    $hoje = explode("-", date("Y-m-d"));
    $nasc = explode("-", $_GET['data']);
    $ida = $hoje[0] - $nasc[0];

    if ($hoje[1] < $nasc[1] or $hoje[1] == $nasc[1] and $hoje[2] < $nasc[2]) {
        $ida -= 1;
    }

    if ($hoje < $nasc) {
        $ida = "Data Inválida";
    }

    echo "
    <h1>Resumo</h1>
    <p>CPF: $cpf</p>
    <p>Nome: $nome</p>
    <p>Endereço: $end</p>
    <p>Email: $email</p>
    <p>Idade: $ida</p>
    ";
?>

