<?php
include 'connect.php';

$nomeCliente=$_POST['nomeCliente'];
$dataNascimento=$_POST['dataNascimento'];
$endereco=$_POST['endereco'];
$numero=$_POST['numero'];
$cidade=$_POST['cidade'];
$telefone=$_POST['telefone'];

$sql= "insert into clientes (nomeCliente, dataNascimento, endereco, numero, cidade, telefone) values ('$nomeCliente','$dataNascimento','$endereco',$numero,'$cidade', $telefone);";
$res= $con->query($sql);
header('location:index.php');

?>