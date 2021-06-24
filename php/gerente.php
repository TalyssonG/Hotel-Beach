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


$result = "INSERT INTO Gerente(nome, email, cpf, endereco, senha, telefone) VALUES ('$nome', '$email', '$CPF', '$endereco', '$senha', '$telefone')";

$resultado_usuario = mysqli_query($conn, $result) or die('erro ao cadastrar gerente!');

header('Location: ../cadastrar/cadastrarGerente.html');
die();

?>