<?php
include 'connect.php';
/* $idLivro = filter_input(INPUT_POST, 'idlivro', FILTER_SANITIZE_NUMBER_INT); */
$idAlivro = $_GET['idAlivro'];
$sql= "delete from alugarlivro where idAlivro=$idAlivro;";
mysqli_query($con, $sql);
header('location:devolucaoLivro.php');

?>