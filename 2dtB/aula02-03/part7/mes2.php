<?php
    $meses = ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"];
    $num = $_GET["mes"];

    if ($num > 12 or $num < 1) {
        echo "Mês Inválido";
    } else {
        echo $meses[$num-1];
    }

    echo "
    <form action='index.php'>
        <input type='submit' value='Voltar' />
    </form>
    ";
?>
