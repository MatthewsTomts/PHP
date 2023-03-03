<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['msg'])) { 
            echo $_SESSION['msg'];  
            unset($_SESSION['msg']);
        }
    ?>
    
    <header>
        <nav>
            <h1>NAVEGAÇÃO</h1>
            <a href="cad_usuario.php">Cadastrar</a><br>
            <a href="read.php">Ver os usuários</a><br>
            <a href="alt_usuario.php">Alterar</a><br>
            <a href="del_usuario.php">Deletar</a><br>
        </nav>
    </header>
</body>
</html>