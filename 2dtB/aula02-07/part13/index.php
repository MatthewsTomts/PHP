<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
        <legend>Insira os números:</legend>
        <form action="faixa.php" method="GET">
            <label for="senha"> Digite a idade do atleta: </label>
            <input type="number" min=0 name="ida" required> <br><br>
            <input type="submit" value="Verificar a faixa">
            <input type="reset" value="Limpar Campos">
        </form>
    </fieldset>
</body>
</html>