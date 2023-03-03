<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // echo "Nome: $nome <br>";
    // echo "E-mail: $email <br>";

    $result_usuario = "UPDATE empresa SET nome='$nome', email='$email', alterado=NOW() WHERE PK_id='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn)) {
        $_SESSION['msg']  = "<p style='color:green;'>USUARIO EDITADO COM SUCESSO</p>";
        header("Location: index.php");
    } else {
        $_SESSION['msg']  = "<p style='color:red;'>USUARIO NÃO FOI EDITADO</p>";
        header("Location: edit_usuario.php?id=$id");
    }
?>