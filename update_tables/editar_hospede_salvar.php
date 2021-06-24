<?php

include_once("../conexao.php");

$id = $_POST['idHospede'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$CPF = $_POST['cpf'];
$RG = $_POST['rg'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


$sql = "UPDATE `Hospede` SET `id_hospede`=$id,`nome`='$nome',`email`='$email',`senha`='$senha',`cpf`='$CPF',`rg`='$RG',`telefone`='$telefone',`endereco`='$endereco' WHERE `id_hospede`=$id";

mysqli_query($conn, $sql) or 
die("
    <script>
    alert('Não foi possível alterar o registro do hospede.');
    location.href = '../php/ConsultarHospede.php';
    </script>"
);


echo "
<script>
alert('As alterações do registro do hospede foram salvas com sucesso.');
location.href = '../php/ConsultarHospede.php';
</script>";