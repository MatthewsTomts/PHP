<?php
    $login = $_GET["login"];
    $senha = $_GET["senha"];

    if ($senha == 'php123') {
        echo 'Login feito com sucesso';
    } else {
        echo 'Login/Senha incorretos.';
    }
?>