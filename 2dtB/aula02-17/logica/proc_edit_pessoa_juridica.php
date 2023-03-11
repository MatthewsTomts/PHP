<?php
session_start();
include_once("../rota.php");
include_once($connRoute);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$emp = htmlspecialchars($_POST['emp']);
$cep = htmlspecialchars($_POST['cep']);
$log = htmlspecialchars($_POST['log']);
$num = htmlspecialchars($_POST['num']);
$bairro = htmlspecialchars($_POST['bairro']);
$cid = htmlspecialchars($_POST['cid']);
$uf = htmlspecialchars($_POST['uf']);

$result_usuario = "UPDATE cnpj SET nome_empresa = '$emp', cep = '$cep',
logradouro = '$log', numero = '$num', bairro = '$bairro', cidade = '$cid', uf = '$uf' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>EMPRESA EDITADA COM SUCESSO</p>";
    header("Location: " . $listJurRoute);
} else {
    $_SESSION['msg'] = "<p style='color:red;'>EMPRESA NÃO FOI EDITADA</p>";
    header("Location: " . $editJurRoute . $id);
}
