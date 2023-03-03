<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a href="cad_usuario.php">Cadastrar</a><br>
  <a href="index.php">HOME</a><br><br>

  <?php
    session_start();
    if(isset($_SESSION['msg'])) { 
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    }
  ?>

  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Criado</th>
        <th>Alterado</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once("conexao.php");
        $resultado_empresa = $conn->query("SELECT * FROM empresa;");

        if ($resultado_empresa->num_rows > 0) {
          // output data of each row
          while($row = $resultado_empresa->fetch_assoc()) {
            echo '
            <tr>
              <th>'.$row['PK_id'].'</th>
              <td>'.$row['nome'].'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['criado'].'</td>
              <td>'.$row['modificado'].'</td>
            </tr>';
          }
        } else {
          echo "0 results";
        }
      ?>
    </tbody>
  </table>
</body>
</html>