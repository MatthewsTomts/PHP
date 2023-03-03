<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD - Cadastrar</title>
</head>
<body>
  <a href="cad_usuario.php">Cadastrar</a><br>
  <a href="index.php">Listar</a><br><br>

  <?php
    if(isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
  ?>

  <form action="proc_cad_usuario.php" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" required><br><br>
    
    <label for="email">Email: </label>
    <input type="email" name="email" required><br><br>
    
    <label for="cpf">CPF: </label>
    <input type="text" minlength="11" maxlength="14" name="cpf" placeholder="XXX.XXX.XXX-XX" required><br><br>

    <label for="senha">Senha: </label>
    <input type="password" name="senha" required><br><br>
    
    <label for="confSenha">Confirmar Senha: </label>
    <input type="password" name="confSenha" required><br><br>

    <input type="submit" value="Enviar" id="enviar" disabled>
  </form>
  <script src="script.js"></script>
</body>
</html>