<?php
include 'connect.php';

$idLivro=$_POST['idLivro'];
$idCliente=$_POST['idCliente'];
$dataInclusao=$_POST['dataInclusao'];
$dataDevolucao=$_POST['dataDevolucao'];

if(empty($idLivro))
    echo "<script>alert('Codigo Invalido')</script>";
else if(empty($idCliente))
    echo "<script>alert('Codigo Invalido')</script>";
else if(empty($dataInclusao))
    echo "<script>alert('Falta preencher a data de inclusão)</script>";
else if(empty($dataDevolucao))
    echo "<script>alert('Falta preencher a data de devolução)</script>";
else
{
    $sql= "insert into alugarlivro (idLivro, idCliente, dataInclusao, dataDevolucao) values ($idLivro, $idCliente,'$dataInclusao','$dataDevolucao');";
    $sql1 = "update cadastrolivro set quantidade = quantidade - 1 WHERE idLivro = $idLivro;";
    $res= $con->query($sql);
    $res1= $con->query($sql1);
    echo "<script>alert('Foi realizado o cadastro)</script>";
}

?>