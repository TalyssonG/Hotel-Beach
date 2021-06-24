<?php
session_start();
include_once("../conexao.php");

$id_hospede = intval($_GET['usuario']);
  
	$result = "DELETE FROM Hospede WHERE id_hospede= '$id_hospede'";
	
	$resultado = mysqli_query($conn, $result);
	
	if($resultado){
	  echo "
	  <script>
	  alert('O registro do hóspede foi excluído com sucesso.');
	  location.href = 'ConsultarHospede.php';
	  </script>";

	}else{
  echo "
	  <script>
	  alert('Não foi possível excluído o registro do hóspede.');
	  location.href = 'ConsultarHospede.php';
	  </script>";

	}
	?>