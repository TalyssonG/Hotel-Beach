<?php 

include_once "../conexao.php";

$id = $_GET['id_quarto'];

$sql = "SELECT * FROM Quarto WHERE id_quarto = $id";

$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>