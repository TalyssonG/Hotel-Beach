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

		$result_usuarios = "SELECT * FROM Quarto ORDER BY id_quarto";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios); ?>
		
 <table  class="table">
        
          <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Tamanho</th>
            <th>Andar</th>
            <th>N°</th>
           <th>Ações</th>
          </tr>
          
		<?php
		
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){ ?>

  <tr>
  <td><?php echo $row_usuario['id_quarto'] ?></td>
  <td><?php echo $row_usuario['tipo'] ?></td>
   <td><?php echo $row_usuario['tamanho_quarto'] ?></td>
  <td><?php echo $row_usuario['andar_quarto'] ?></td>
  <td><?php echo $row_usuario['numero_porta'] ?></td>
  
  <td>
  <a href="../cadastrar/editarQuarto.php?id_quarto=<?= $row_usuario['id_quarto'] ?>" class="btn btn-warning">Editar </a>
  
  <a href= "javascript: if(confirm('Deseja mesmo excluir o registro do quarto?')) location.href='ExcluirQuarto.php?p=Excluir&usuario=<?php echo $row_usuario['id_quarto'];?>'" class="btn btn-danger">Excluir</a>
  </td>
  </tr>
     
     <?php
     	} 
     	?>
   
	</body>
</html>