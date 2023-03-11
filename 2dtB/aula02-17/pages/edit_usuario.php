<?php
session_start();
include_once("../rota.php");
include_once($connRoute);

// $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT); Dá erro, por causa da linha 40 no index.php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM empresa WHERE PK_id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Editar</title>
</head>

<body>
    <a href="<?php echo $formRoute; ?>">Cadastrar</a><br>
    <a href="<?php echo $indexRoute; ?>">Listar Usuários</a><br>
    <a href="<?php echo $listJurRoute; ?>">Listar Empresas</a><br><br>
    <h1>Editar Usuário</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <p>Deixe o campo senha vazio para não alterar seu valor.</p>
    <form method="POST" action="<?php echo $procEditUserRoute; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="">Nome: </label>
        <input type="text" name="nome" autofocus value="<?php echo $row_usuario['nome']; ?>"><br><br>

        <label for="">E-mail: </label>
        <input type="text" name="email" value="<?php echo $row_usuario['email']; ?>"><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha"><br><br>

        <label for="confSenha">Confirmar Senha: </label>
        <input type="password" name="confSenha"><br><br>

        <input type="submit" value="Editar">
    </form>
</body>

</html>
