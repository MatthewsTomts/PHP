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
        <label for="cpf">CPF</label>
        <p id="cpf"><?php
            session_start();
            echo $_SESSION['cpf'];
        ?></p>
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" required><br><br>
        <label for="end">Endereço</label><br>
        <input type="text" name="end" required><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" required><br><br>
        <label for="data">Data de Nascimento:</label><br>
        <input type="date" name="data" required><br><br>

        <input type="submit" value="Prosseguir">
    </form><br>
    <a href="index.php">
        <button>Voltar para o Home</button>
    </a>
</body>
</html>
