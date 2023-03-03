<?php
    session_start();
    include_once("conexao.php");

    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "UPDATE empresa SET nome='$nome', email='$email', modificado=NOW() WHERE PK_id=$id";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "<p style= 'color:green;'>USUÁRIO ATUALIZADO COM SUCESSO</p>";
        header("Location: read.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>USUÁRIO NÃO FOI ATUALIZADO</p>";
        header("Location: alt_usuario.php");
    }
?>