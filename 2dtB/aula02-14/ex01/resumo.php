<?php
    session_start();
    $placa = $_SESSION['placa'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $ano = $_GET['ano'];

    $hoje = date("Y");
    $tempo = $hoje - $ano;

    echo "
    <h1>Dados do Veículo</h1>
    <p>Placa: $placa</p>
    <p>Marca: $marca</p>
    <p>Modelo: $modelo</p>
    <p>Tempo de Uso do Veículo: $tempo (anos)</p>
    <a href='index.php'>
        <button>Voltar para o Home</button>
    </a>
    ";
?>
