<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="media.php" method="get">
        <h1>Notas: </h1>
        <label for="not1">Nota 1</label>
        <input name="not1" placeholder="ex.: 2" pattern="^\d*(\.\d{0,1})?$" required> <br><br>
        <label for="not2">Nota 2</label>
        <input name="not2" placeholder="ex.: 2.5" pattern="^\d*(\.\d{0,1})?$" required> <br><br>
        <label for="not3">Nota 3</label>
        <input name="not3" placeholder="ex.: 3.7" pattern="^\d*(\.\d{0,1})?$" required> <br><br>
        <label for="not4">Nota 4</label>
        <input name="not4" placeholder="ex.: 4" pattern="^\d*(\.\d{0,1})?$" required> <br><br>
        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>