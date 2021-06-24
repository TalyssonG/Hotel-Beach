<?php 

include_once "../conexao.php";

$id = $_GET['id_recepcionista'];

$sql = "SELECT * FROM Recepcionista WHERE id_recepcionista = $id";

$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>