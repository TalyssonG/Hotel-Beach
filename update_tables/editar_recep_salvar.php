<?php

include_once("../conexao.php");

$id = $_POST['idRecep'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$CPF = $_POST['cpf'];
$RG = $_POST['rg'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


$sql = "UPDATE `Recepcionista` SET `id_recepcionista`=$id,`nome`='$nome',`email`='$email',`senha`='$senha',`cpf`='$CPF',`rg`='$RG',`telefone`='$telefone',`endereco`='$endereco' WHERE `id_recepcionista`=$id";

mysqli_query($conn, $sql) or 
die("
    <script>
    alert('Não foi possível alterar o registro do recepcionista.');
    location.href = '../php/ConsultarRecep.php';
    </script>"
);


echo "
<script>
alert('As alterações do registro do recepcionista foram salvas com sucesso.');
location.href = '../php/ConsultarRecep.php';
</script>";