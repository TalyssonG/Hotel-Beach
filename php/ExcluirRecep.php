<?php
session_start();
include_once("../conexao.php");

$id_recepcionista = intval($_GET['usuario']);
  
	$result = "DELETE FROM Recepcionista WHERE id_recepcionista= '$id_recepcionista'";
	
	$resultado = mysqli_query($conn, $result);
	
	if($resultado){
	  echo "
	  <script>
	  alert('O registro do recepcionista foi excluído com sucesso.');
	  location.href = 'ConsultarRecep.php';
	  </script>";

	}else{
  echo "
	  <script>
	  alert('Não foi possível excluído o registro do recepcionista.');
	  location.href = 'ConsultarRecep.php';
	  </script>";

	}
	?>