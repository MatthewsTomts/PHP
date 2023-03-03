<?php
    $placa = $_GET['placa'];
    $padrao1 = '/[A-Z]{3}[0-9]{4}/';
    $padrao2 = '/[A-Z]{3}[0-9][A-Z][0-9]{2}/';

    if (preg_match($padrao1, $placa) or preg_match($padrao2, $placa)) {
        echo "Placa Válida<br><br>
        <form action='cadastro.php' method='GET'>
            <button type='submit'>Prosseguir</button>
        </form>";
        session_start();
        $_SESSION['placa'] = $placa;
    } else {
        echo 'Placa Inválida';
    }

    echo '
    <a href="index.php">
        <button>Voltar</button>
    </a>
    ';
?>