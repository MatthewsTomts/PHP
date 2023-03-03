<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="resumo.php" method="GET">
        <label for="placa">PLACA</label>
        <p id="placa"><?php
            session_start();
            echo $_SESSION['placa'];
        ?></p>
        <label for="marca">Marca</label><br>
        <input type="text" name="marca" required><br><br>
        <label for="modelo">Modelo</label><br>
        <input type="text" name="modelo" required><br><br>
        <label for="ano">Ano de fabricação</label><br>
        <?php
            $hoje = date("Y");
            echo "<input type='number' name='ano' min='1886' max='$hoje' required><br><br>";
        ?>
        <input type="submit" value="Continuar">
    </form><br>
    <a href="index.php">
        <button>Voltar para o Home</button>
    </a>
</body>
</html>
