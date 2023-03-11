<?php
session_start();
include_once("../rota.php");
include_once($connRoute);
echo "pagina certa";

$cnpj = htmlspecialchars($_POST['cnpj']);
$emp = htmlspecialchars($_POST['emp']);
$cep = htmlspecialchars($_POST['cep']);
$log = htmlspecialchars($_POST['log']);
$num = htmlspecialchars($_POST['num']);
$bairro = htmlspecialchars($_POST['bairro']);
$cid = htmlspecialchars($_POST['cid']);
$uf = htmlspecialchars($_POST['uf']);

$cnpj = str_replace('.', '', $cnpj);
$cnpj = str_replace('/', '', $cnpj);
$cnpj = str_replace('-', '', $cnpj);
$cep = str_replace('-', '', $cep);
$sep = str_split($cnpj, 1);

$dig1 = $sep[12];
$dig2 = $sep[13];
$certo1 = false;
$certo2 = false;

$soma = 0;
$j = 5;
for ($i = 0; $i < count($sep) - 2; $i++) {
    if ($j == 1) {
        $j = 9;
    }
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
$j = 6;
for ($i = 0; $i < count($sep) - 1; $i++) {
    if ($j == 1) {
        $j = 9;
    }
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

if ($certo1 && $certo2) {
    $result_empresa = "INSERT INTO cnpj (cnpj, nome_empresa, cep, logradouro, numero, bairro, cidade, uf)
    VALUES ('$cnpj', '$emp', '$cep', '$log', '$num', '$bairro', '$cid', '$uf')";
    $resultado_empresa = mysqli_query($conn, $result_empresa);

    if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "<p style= 'color:green;'>EMPRESA CADASTRADA COM SUCESSO</p>";
        header("Location: " . $listJurRoute);
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>EMPRESA NÃO FOI CADASTRADA</p>";
        header('Location: ' . $cadJurRoute);
    }
    echo 'Deu certo';
} else {
    $_SESSION['msg'] = "<p style='color:red;'>EMPRESA NÃO FOI CADASTRADA - CNPJ INVÁLIDO $dig2 $vDig2 $dig1 $vDig1</p>";
    header('Location: ' . $cadJurRoute);
}
