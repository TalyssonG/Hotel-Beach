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

		$result_usuarios = "SELECT * FROM Hospede ORDER BY id_hospede";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios); ?>
		
 <table  class="table">
        
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Endereço</th>
           <th>Telefone</th>
           <th>Ações</th>
          </tr>
          
		<?php
		
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){?>
    

  <tr>
  <td><?php echo $row_usuario['id_hospede'] ?></td>
  <td><?php echo $row_usuario['nome'] ?></td>
   <td><?php echo $row_usuario['email'] ?></td>
  <td><?php echo $row_usuario['cpf'] ?></td>
  <td><?php echo $row_usuario['rg'] ?></td>
  <td><?php echo $row_usuario['endereco'] ?></td>
  <td><?php echo $row_usuario['telefone'] ?></td>
  <td>
  <a href="../cadastrar/editarHospede.php?id_hospede=<?= $row_usuario['id_hospede'] ?>" class="btn btn-warning">Editar </a>
  
 <a href= "javascript: if(confirm('Deseja mesmo excluir o registro do hóspede?')) location.href='ExcluirHospede.php?p=Excluir&usuario=<?php echo $row_usuario['id_hospede'];?>'" class="btn btn-danger">Excluir</a></td>
  </tr>
     
     <?php }
     	?>
   
	</body>
</html>