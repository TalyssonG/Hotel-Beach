<?php 

include_once "../conexao.php";

$id = $_GET['id_hospede'];

$sql = "SELECT * FROM Hospede WHERE id_hospede = $id";

$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>