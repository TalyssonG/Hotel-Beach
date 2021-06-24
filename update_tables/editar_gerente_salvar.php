<?php

include_once("../conexao.php");

$id = $_POST['idGerente'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$CPF = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


$sql = "UPDATE `Gerente` SET `id_gerente`=$id,`nome`='$nome',`email`='$email',`senha`='$senha',`cpf`='$CPF',`telefone`='$telefone',`endereco`='$endereco' WHERE `id_gerente`=$id";

mysqli_query($conn, $sql) or 
die("
    <script>
    alert('Não foi possível alterar o registro do gerente.');
    location.href = '../php/ConsultarGerente.php';
    </script>"
);


echo "
<script>
alert('As alterações do registro do gerente foram salvas com sucesso.');
location.href = '../php/ConsultarGerente.php';
</script>";