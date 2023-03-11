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

    <form action="<?php echo $procCadJurRoute; ?>" method="post">
        <label for="cnpj">CNPJ: </label>
        <input type="text" name="cnpj" placeholder="XX.XXX.XXX/XXXX-XX"
            pattern="\d{2}[.]?\d{3}[.]?\d{3}[/]?\d{4}[-]?\d{2}" required><br><br>

        <label for="emp">Nome da Empresa: </label>
        <input type="text" name="emp" required><br><br>

        <label for="cep">CEP: </label>
        <input type="text" name="cep" placeholder="XXXXX-XXX" pattern="\d{5}[-]?\d{3}" required><br><br>

        <label for="log">Logradouro: </label>
        <input type="text" name="log" required placeholder="Rua / Avenida / Travessa"><br><br>

        <label for="num">Número: </label>
        <input type="text" pattern="\d{1,5}" name="num" required placeholder="Máx. 5 digitos"><br><br>

        <label for="bairro">Bairro: </label>
        <input type="text" name="bairro" required placeholder="Limoeiro"><br><br>

        <label for="cid">Cidade: </label>
        <input type="text" name="cid" required><br><br>

        <label for="uf">UF: </label>
        <input type="text" pattern="[A-Z]{2}" name="uf" placeholder="SP" required><br><br>

        <input type="submit" value="Enviar" id="enviar">
    </form>
</body>

</html>
