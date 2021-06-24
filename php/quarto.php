<?php
session_start();
include_once '../auth.php';

include_once("../conexao.php");

$tipo = $_POST['tipo'];
$tamanho = $_POST['tamanho'];
$andar = $_POST['andar'];
$porta = $_POST['porta'];


$result = "INSERT INTO Quarto(tipo, tamanho_quarto, andar_quarto, numero_porta) VALUES ('$tipo', '$tamanho', '$andar', '$porta')";

$resultado_usuario = mysqli_query($conn, $result) or die('erro ao cadastrar quarto!');

header('Location: ../cadastrar/cadastrarQuarto.html');
die();

?>