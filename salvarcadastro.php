<?php
include 'connect.php';

$nomeLivro=$_POST['nomeLivro'];
$nomeAutor=$_POST['nomeAutor'];
$editor=$_POST['editor'];
$preco=$_POST['preco'];
$quantidade=$_POST['quantidade'];

$sql= "insert into cadastrolivro (nomeLivro, nomeAutor, editor, preco, quantidade) values ('$nomeLivro','$nomeAutor','$editor',$preco, $quantidade);";
$res= $con->query($sql);

header('location:index.php');