<?php
session_start();
include_once("rota.php");
include_once($connRoute);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Listar Usuário</title>
</head>

<body>
    <a href="<?php echo $formRoute; ?>">Cadastrar</a><br>
    <a href="<?php echo $indexRoute; ?>">Listar Usuários</a><br>
    <a href="<?php echo $listJurRoute; ?>">Listar Empresas</a><br><br>
    <h1>Listar Usuário</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    // Receber o número da página
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    // Setar a quantidade de items por pagina
    $qnt_result_pg = 5;

    // Calcular o inicio visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

    $result_usuarios = "SELECT * FROM empresa LIMIT $inicio, $qnt_result_pg";
    $resultado_usuarios = mysqli_query($conn, $result_usuarios);
    while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
        echo "ID: " . $row_usuario['PK_id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "E-mail: " . $row_usuario['email'] . "<br>";
        echo "<a href='$editUserRoute.$row_usuario[PK_id]'>Editar</a><br>";
        echo "<a href='$delUserRoute.$row_usuario[PK_id]'>Apagar</a><br><hr>";
    }

    // Paginação - Somar a quantidade de usuários
    $result_pg = "SELECT COUNT(PK_id) AS num_result FROM empresa";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    // echo $row_pg['num_result'];
    // Quantidade de pagina
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    // Limitar os link antes depois
    $max_links = 2;
    echo "<a href='$indexRoute?pagina=1'>Primeira</a> ";

    for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        if ($pag_ant >= 1) {
            echo "<a href='$indexRoute?pagina=$pag_ant'>$pag_ant</a> ";
        }
    }

    echo $pagina;

    for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
        if ($pag_dep <= $quantidade_pg) {
            echo "<a href='$indexRoute?pagina=$pag_dep'>$pag_dep</a> ";
        }
    }

    echo " <a href='$indexRoute?pagina=$quantidade_pg'>Ultima</a>";
    ?>
</body>

</html>