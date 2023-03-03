<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="digito" action="sal.php" method="GET">
        <h1>Digite algo:</h1>
        <input name="sal" pattern="^\d*(\.\d{0,2})?$" required>
        <input type="submit" value="Calcular Salário">
    </form>
</body>
</html>