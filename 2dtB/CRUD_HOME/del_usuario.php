<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="cad_usuario.php">Cadastrar</a><br>
    <a href="index.php">HOME</a><br><br>

    <?php
        session_start();
        if(isset($_SESSION['msg'])) { 
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
    ?>

    <form action="delete.php" method="post">
        <label for="id">Id: </label>
        <input type="number" name="id"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>