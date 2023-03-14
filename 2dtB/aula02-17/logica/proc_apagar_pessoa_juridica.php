<?php
session_start();
include_once("../rota.php");
include_once($connRoute);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
    $result_usuario = "DELETE FROM cnpj WHERE id='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if (mysqli_affected_rows($conn)) {
        $_SESSION['msg'] = "<p style='color:green;'> EMPRESA DELETADA COM SUCESSO</p>";
    } else {
        $_SESSION['msg'] = "<p style='color:red;'> Erro: A empresa não foi deletada.</p>";
    }
    header("Location: " . $listJurRoute);
}
