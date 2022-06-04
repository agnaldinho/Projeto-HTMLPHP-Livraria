<?php
include 'connect.php';

$idLivro=$_POST['idLivro'];
$idCliente=$_POST['idCliente'];
$dataInclusao=$_POST['dataInclusao'];
$dataDevolucao=$_POST['dataDevolucao'];

$sql= "insert into alugarlivro (idLivro, idCliente, dataInclusao, dataDevolucao) values ($idLivro, $idCliente,'$dataInclusao','$dataDevolucao');";
$res= $con->query($sql);
header('location:index.php');
?>