<?php
  include '../conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
</head>
<body>
  <h1>Cadastro de contatos</h1>
  <hr>
  <form method="POST">
      <table>
        <tr>
          <td>Nome</td>
          <td><input type="text" name="nome"></td>
        </tr>
        <tr>
          <td>Telefone</td>
          <td><input type="text" name="telefone"></td>
        </tr>
      </table>
      <input type="submit" value="Salvar">
  </form>
  <?php
    if (!empty($_POST['nome']) and ($_POST['telefone']) ){
      $nome = $_POST['nome'];
      $telefone = $_POST['telefone'];
      $erro =0;
      $sql = mysqli_query($conexao,"INSERT INTO contatos(nome,telefone) 
                VALUES ('$nome','$telefone')");
    
  echo "<h1>Cadastro com sucesso!</h1>";

}
  ?>
  <a href="../index.php">Voltar</a> 
</body>
</html>