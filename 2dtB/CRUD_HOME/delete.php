<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "DELETE FROM empresa WHERE PK_id=$id";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "<p style= 'color:green;'>USUÁRIO DELETADO COM SUCESSO</p>";
        header("Location: read.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>USUÁRIO NÃO FOI DELETADO</p>";
        header("Location: del_usuario.php");
    }
?>