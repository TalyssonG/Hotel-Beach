<?php
session_start();
include_once("../conexao.php");?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	
		<title></title>		
	</head>
	<body>
		
		<?php

    $res = "";

    if (isset($_GET['nome']) )
    {
      $nome = $_GET['nome'];
      $res = " WHERE nome LIKE '%$nome%'";
    }

		$result_usuarios = "SELECT * FROM Gerente" . $res;
		$resultado_usuarios = mysqli_query($conn, $result_usuarios); ?>
		
 <table  class="table">
        
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Endereço</th>
           <th>Telefone</th>
           <th>Ações</th>
          </tr>
          
		<?php
		
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){ ?>

  <tr>
  <td><?php echo $row_usuario['id_gerente'] ?></td>
  <td><?php echo $row_usuario['nome'] ?></td>
   <td><?php echo $row_usuario['email'] ?></td>
  <td><?php echo $row_usuario['cpf'] ?></td>
  <td><?php echo $row_usuario['endereco'] ?></td>
  <td><?php echo $row_usuario['telefone'] ?></td>
  <td>
  <a href="../cadastrar/editarGerente.php?id_gerente=<?= $row_usuario['id_gerente'] ?>" class="btn btn-warning">Editar </a>
  
 <a href= "javascript: if(confirm('Deseja mesmo excluir o registro do gerente?')) location.href='ExcluirGerente.php?p=Excluir&usuario=<?php echo $row_usuario['id_gerente'];?>'" class="btn btn-danger">Excluir</a></td>
  </tr>
     
     <?php }
     	?>
   
	</body>
</html>