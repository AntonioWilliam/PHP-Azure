<?php
  include "../conexao.php";
  $sql = "SELECT * FROM contatos ORDER BY id";
  $con = mysqli_query($conexao,$sql) or die (mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contatos</title>
</head>
<body>
  <h1>Contatos</h1>
  <hr>

  <table border="1px">
    <tr>
      <td>id</td>
      <td>Nome</td>
      <td>Telefone</td>
      <td>Deletar</td>
      <td>Atualizar</td>
    </tr>
    <?php
    while ($dados = mysqli_fetch_array($con)){ ?>
   
      <tr>
        <td><?php echo $dados['id'];?></td>
        <td><?php echo $dados['nome'];?></td>
        <td><?php echo $dados['telefone'];?></td>
        
        <td><a href="">Deletar</a></td>
        <td><a href="">Atualizar</a></td>
      </tr>
    
    <?php } ?>
  
  </table>

  <a href="../index.php">Voltar</a> 
</body>
</html>