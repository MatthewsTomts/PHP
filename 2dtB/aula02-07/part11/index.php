<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logar.php" method="GET">
        <label for="login"> Login: </label>
        <input type="text" name="login" placeholder="Login" required> <br><br>
        <label for="senha"> Senha: </label>
        <input type="password" name="senha" placeholder="Senha" required> <br><br>
        <input type="submit" value="Logar">
        <input type="reset" value="Limpar Campos">
        <button><a href="index.php" style="color:black; text-decoration: none;">Limpar campos</a></button>
    </form>
</body>
</html>