<?php
include 'connect.php';

$idLivro=$_POST['idLivro'];
$idCliente=$_POST['idCliente'];
$dataInclusao=$_POST['dataInclusao'];
$dataDevolucao=$_POST['dataDevolucao'];

$sql= "insert into alugarlivro (idLivro, idCliente, dataInclusao, dataDevolucao) values ($idLivro, $idCliente,'$dataInclusao','$dataDevolucao');";
$sql1 = "update cadastrolivro set quantidade = quantidade - 1 WHERE idLivro = $idLivro;";
$res= $con->query($sql);
$res1= $con->query($sql1);
header('location:index.php');
?>