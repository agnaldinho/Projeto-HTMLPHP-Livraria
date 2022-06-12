<?php
include 'connect.php';

$nomeCliente=$_POST['nomeCliente'];
$dataNascimento=$_POST['dataNascimento'];
$endereco=$_POST['endereco'];
$numero=$_POST['numero'];
$cidade=$_POST['cidade'];
$telefone=$_POST['telefone'];
if(empty($nomeCliente))
    echo "<script>alert('Falta preencher o nome do cliente')</script>";
else if(empty($dataNascimento))
    echo "<script>alert('Falta preencher a data de nascimento')</script>";
else if(empty($endereco))
    echo "<script>alert('Falta preencher o endereço')</script>";
else if(empty($numero))
    echo "<script>alert('Falta preencher o numero da casa')</script>";
else if(empty($cidade))
    echo "<script>alert('Falta preencher a cidade')</script>"; 
else if(empty($telefone))
    echo "<script>alert('Falta preencher o telefone de contato')</script>";
else
{
    $sql= "insert into clientes (nomeCliente, dataNascimento, endereco, numero, cidade, telefone) values ('$nomeCliente','$dataNascimento','$endereco',$numero,'$cidade', $telefone);";
    $res= $con->query($sql);
    echo "<script>alert('Foi realizado o cadastro')</script>";
}



?>