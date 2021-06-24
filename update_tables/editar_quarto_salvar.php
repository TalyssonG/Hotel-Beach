<?php


include_once("../conexao.php");

$idQuarto = $_POST['idQuarto'];
$tipo = $_POST['tipo'];
$tamanho = $_POST['tamanho'];
$andar = $_POST['andar'];
$porta = $_POST['porta'];


$sql = "UPDATE `Quarto` SET `id_quarto`=$idQuarto,`tipo`='$tipo',`tamanho_quarto`='$tamanho',`andar_quarto`='$andar',`numero_porta`='$porta' WHERE `id_quarto` = $idQuarto";

mysqli_query($conn, $sql) or 
die("
    <script>
    alert('Não foi possível alterar o registro do quarto.');
    location.href = '../php/ConsultarQuarto.php';
    </script>"
);


echo "
<script>
alert('As alterações do registro do quarto foram salvas com sucesso.');
location.href = '../php/ConsultarQuarto.php';
</script>";
