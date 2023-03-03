<?php
    session_start();
    include_once("conexao.php");

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
    <a href="cad_usuario.php">Cadastrar</a><br>
    <a href="index.php">Listar</a>
    <h1>Editar Usuário</h1>
    <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <form method="POST" action="proc_edit_usuario.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="">Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo" autofocus value="<?php echo $row_usuario['nome']; ?>"><br><br>
        
        <label for="">E-mail: </label>
        <input type="text" name="email" placeholder="Digite o nome completo" value="<?php echo $row_usuario['email']; ?>"><br><br>

        <input type="submit">
    </form>
</body>
</html>