<?php
session_start();
include_once '../auth.php';

include_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$CPF = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$RG = $_POST['rg'];


$result = "INSERT INTO Recepcionista(nome, email, cpf, rg, endereco, senha, telefone, horario) VALUES ('$nome', '$email', '$CPF', '$RG', '$endereco', '$senha', '$telefone', NOW())";


$resultado_usuario = mysqli_query($conn, $result) or die('erro ao cadastrar recepcionista!');

header('Location: ../cadastrar/cadastrarRecep.html');
die();

?>