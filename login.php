<?php

session_start();

if (isset($_SESSION['usuario']))
{
    header('Location: index.php');
    die();
}

if (!isset($_POST['email']) && !isset($_POST['password'])) {
    require_once 'login.html';
    die();
}


include_once 'conexao.php';

$email = preg_replace('/[^[:alnum:@]_]/', '', $_POST['email']);
$senha = preg_replace('/[^[:alnum:@]_]/', '', $_POST['password']);


$sql = "SELECT id_gerente, nome, login FROM Gerente WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($conn, $sql);

if (empty($result)) {
    header('Lacation: login.html?msg=usuario não cadastrado');
    die();
}

$_SESSION['usuario'] = $result->fetch_array();
header('Location: index.php');
die();