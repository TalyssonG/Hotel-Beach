<?php
session_start();
include_once '../auth.php';

include_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$CPF = $_POST['cpf'];
$RG = $_POST['rg'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


//$date = date('Y-m-d H:i:s');
$result = "INSERT INTO Hospede(nome, email, senha, cpf, rg, telefone, endereco, horario) VALUES ('$nome', '$email', '$senha', '$CPF', '$RG', '$telefone', '$endereco', NOW())";

$resultado_usuario = mysqli_query($conn, $result) or die('erro ao cadastrar hóspede!');

header('Location: ../cadastrar/CadastrarHospede.html');
die();

?>