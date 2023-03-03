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
        <form action="calculador.php" method="GET">
            <img src="img/calc.png" alt="icone calculadora"> <br><br>
            <label for="login"> Digite um número: </label>
            <input type="number" step="any" name="num1" required> <br><br>
            <label for="senha"> Digite outro número: </label>
            <input type="number" step="any" name="num2" required> <br><br>
    
            <input type="radio" name="radio" value="+" required>
            <label for="rd1">+</label> <br><br>
            <input type="radio" name="radio" value="-" required>
            <label for="rd2">-</label> <br><br>
            <input type="radio" name="radio" value="*" required>
            <label for="rd3">X</label> <br><br>
            <input type="radio" name="radio" value="/" required>
            <label for="rd4">/</label> <br><br>
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar Campos">
        </form>
    </fieldset>
</body>
</html>