<?php
session_start();
include_once("../rota.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>

<body>
    <a href="<?php echo $formRoute; ?>">Cadastrar</a><br>
    <a href="<?php echo $indexRoute; ?>">Listar Usuários</a><br>
    <a href="<?php echo $listJurRoute; ?>">Listar Empresas</a><br><br>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form action="<?php echo $procCadUserRoute; ?>" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required autofocus><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" required><br><br>

        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" placeholder="XXX.XXX.XXX-XX" pattern="\d{3}[.]?\d{3}[.]?\d{3}[-]?\d{2}"
            required><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" required><br><br>

        <label for="confSenha">Confirmar Senha: </label>
        <input type="password" name="confSenha" required><br><br>

        <input type="submit" value="Enviar" id="enviar" disabled>
    </form>
    <script src="<?php echo $scriptRoute; ?>"></script>
</body>

</html>
