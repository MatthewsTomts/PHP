<?php
include_once("../rota.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <a href="<?php echo $formRoute; ?>">Cadastrar</a><br>
    <a href="<?php echo $listJurRoute; ?>">Listar Empresas</a><br>
    <h1>Logar</h1>
    <?php
    session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form action="<?php echo $procLoginRoute; ?>" method="POST">
        <label for="login">Login: </label>
        <input type="email" name="login" required><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" required>
        <input type="button" value="Mostrar senha" onclick="view()"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <script src="<?php echo $scriptRoute; ?>"></script>
</body>

</html>
