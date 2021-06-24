<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "Hotel";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ('<br>Não possível conectar ao servidor');