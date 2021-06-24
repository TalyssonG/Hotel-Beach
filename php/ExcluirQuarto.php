<?php
session_start();
include_once("../conexao.php");

$id_quarto = intval($_GET['usuario']);
  
	$result = "DELETE FROM Quarto WHERE id_quarto= '$id_quarto'";
	
	$resultado = mysqli_query($conn, $result);
	
	if($resultado){
	  echo "
	  <script>
	  alert('O registro do quarto foi excluído com sucesso.');
	  location.href = 'ConsultarQuarto.php';
	  </script>";

	}else{
  echo "
	  <script>
	  alert('Não foi possível excluído o registro do quarto.');
	  location.href = 'ConsultarQuarto.php';
	  </script>";

	}
	?>