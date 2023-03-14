<?php
session_start();
include_once("../rota.php");
include_once($connRoute);

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
$senha = hash("sha256", htmlspecialchars($_POST['senha']));

$result_usuario = "SELECT email, senha FROM empresa WHERE email='$login' and senha='$senha'";
$resultado_usuario = $conn->query($result_usuario);

if ($row = $resultado_usuario->fetch_row()) {
    $_SESSION['msg'] = "<p style='color:green;'>LOGIN REALIZADO</p>";
    header("Location: " . $cadUserRoute);
} else {
    $_SESSION['msg'] = "<p style='color:red;'>LOGIN NÃO REALIZADO</p>";
    header("Location: " . $loginRoute);
}
