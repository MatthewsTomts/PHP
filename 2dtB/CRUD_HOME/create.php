<?php
    session_start();
    include_once("conexao.php");

    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = 'teste';

    $insert_empresa = "INSERT INTO empresa (nome, email, senha, criado) VALUES ('$nome', '$email', '$senha' NOW()";
    
    $resultado_empresa = mysqli_query($conn, $insert_empresa);

    if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "<p style= 'color:green;'>USUÁRIO CADASTRADO COM SUCESSO</p>";
        header("Location: read.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>USUÁRIO NÃO FOI CADASTRADO</p>";
        header('Location: cad_usuario.php');
    }
?>