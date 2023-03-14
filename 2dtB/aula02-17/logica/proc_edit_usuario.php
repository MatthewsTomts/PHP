<?php
session_start();
include_once("../rota.php");
include_once($connRoute);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = htmlspecialchars($_POST['nome']);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = hash("sha512", htmlspecialchars($_POST['senha']));

$result_usuario = "SELECT senha FROM empresa WHERE PK_id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$row = $resultado_usuario->fetch_row();
if ($senha == $row[0]) {
    $_SESSION['msg'] = "<p style='color:red;'>A SENHA DEVE SER DIFERENTE DA ANTIGA</p>";
    header("Location: ../edit_usuario.php?id=$id");
} else {
    if ($senha == hash("sha512", '')) {
        $result_usuario = "UPDATE empresa SET nome='$nome', email='$email', alterado=NOW() WHERE PK_id='$id'";
    } else {
        $result_usuario = "UPDATE empresa SET nome='$nome', email='$email',
            senha='$senha', alterado=NOW() WHERE PK_id='$id'";
    }

    $resultado_usuario = mysqli_query($conn, $result_usuario);
    if (mysqli_affected_rows($conn)) {
        $_SESSION['msg'] = "<p style='color:green;'>USUARIO EDITADO COM SUCESSO</p>";
        header("Location: " . $indexRoute);
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>USUARIO NÃO FOI EDITADO</p>";
        header("Location: " . $editUserRoute . $id);
    }
}
