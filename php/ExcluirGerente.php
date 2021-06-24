<?php
session_start();
include_once("../conexao.php");

$id_gerente = intval($_GET['usuario']);
  
	$result = "DELETE FROM Gerente WHERE id_gerente= '$id_gerente'";
	
	$resultado = mysqli_query($conn, $result);
	
	if($resultado){
	  echo "
	  <script>
	  alert('O registro do gerente foi excluído com sucesso.');
	  location.href = 'ConsultarGerente.php';
	  </script>";

	}else{
  echo "
	  <script>
	  alert('Não foi possível excluir o registro do gerente.');
	  location.href = 'ConsultarGerente.php';
	  </script>";

	}
	?>