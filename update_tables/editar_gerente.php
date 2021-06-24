<?php 

include_once "../conexao.php";

$id = $_GET['id_gerente'];

$sql = "SELECT * FROM Gerente WHERE id_gerente = $id";

$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>