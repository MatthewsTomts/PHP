<?php
session_start();
include_once("../rota.php");
include_once($connRoute);

// $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT); Dá erro,
// por causa da linha 40 no index.php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cnpj WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Editar Empresa</title>
</head>

<body>
    <a href="<?php echo $formRoute; ?>">Cadastrar</a><br>
    <a href="<?php echo $indexRoute; ?>">Listar Usuários</a><br>
    <a href="<?php echo $listJurRoute; ?>">Listar Empresas</a><br>
    <h1>Editar Empresa</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="<?php echo $procEditJurRoute; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="">Nome da empresa: </label>
        <input type="text" name="emp" value="<?php echo $row_usuario['nome_empresa']; ?>"><br><br>

        <label for="cep">CEP: </label>
        <input type="text" name="cep" pattern="\d{5}[-]?\d{3}" required
            value="<?php echo $row_usuario['cep']; ?>"><br><br>

        <label for="log">Logradouro: </label>
        <input type="text" name="log" value="<?php echo $row_usuario['logradouro']; ?>" required><br><br>

        <label for="num">Número: </label>
        <input type="text" pattern="\d{1,5}" name="num" value="<?php echo $row_usuario['numero']; ?>" required><br><br>

        <label for="bairro">Bairro: </label>
        <input type="text" name="bairro" value="<?php echo $row_usuario['bairro']; ?>" required><br><br>

        <label for="cid">Cidade: </label>
        <input type="text" name="cid" value="<?php echo $row_usuario['cidade']; ?>" required><br><br>

        <label for="uf">UF: </label>
        <input type="text" pattern="[A-Z]{2}" name="uf" value="<?php echo $row_usuario['uf']; ?>" required><br><br>

        <input type="submit" value="Editar">
    </form>
</body>

</html>
