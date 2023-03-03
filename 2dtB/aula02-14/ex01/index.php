<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="veri.php" method="GET">
        <h1>Digite o Placa do veículo:</h1>
        <input type="text" name="placa" minlength="7" maxlength="7" 
        required autofocus autocomplete="off" oninput="this.value = this.value.toUpperCase()">
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>