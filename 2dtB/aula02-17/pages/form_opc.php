<?php
include_once('../rota.php');
if (isset($_POST['cad'])) {
    if ($_POST['cad'] == 'fis') {
        header('Location: ' . $cadUserRoute);
    } else {
        header('Location: ' . $cadJurRoute);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Opções</title>
</head>

<body>
    <a href="<?php echo $formRoute; ?>">Cadastrar</a><br>
    <a href="<?php echo $indexRoute; ?>">Listar Usuários</a><br>
    <a href="<?php echo $listJurRoute; ?>">Listar Empresas</a><br><br>
    <h1>Cadastrar</h1>
    <form action="" method="POST">
        <input type="radio" name="cad" value="fis">
        <label for="fis">Pessoa Física</label>
        <input type="radio" name="cad" value="jur">
        <label for="jur">Pessoa Jurídica</label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>
