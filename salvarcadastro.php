<?php
include 'connect.php';

$nomeLivro=$_POST['nomeLivro'];
$nomeAutor=$_POST['nomeAutor'];
$editor=$_POST['editor'];
$preco=$_POST['preco'];
$quantidade=$_POST['quantidade'];
$dataLancamento=$_POST['dataLancamento'];

$sql= "insert into cadastrolivro (nomeLivro, nomeAutor, editor, preco, quantidade, dataLancamento) values ('$nomeLivro','$nomeAutor','$editor',$preco, $quantidade, '$dataLancamento');";
$res= $con->query($sql);

?>