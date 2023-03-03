<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="notas" action="med.php" method="GET">
        <h1>Notas Alunos</h1>
        <input type="text" name="name" placeholder="Nome do Aluno" required><br><br>
        <input type="number" name="not1" placeholder="Nota 1" required min="1" max="100"><br><br>
        <input type="number" name="not2" placeholder="Nota 2" required min="1" max="100"><br><br>
        <input type="number" name="not3" placeholder="Nota 3" required min="1" max="100"><br><br>
        <input type="submit" value="Média">
    </form>
</body>
</html>