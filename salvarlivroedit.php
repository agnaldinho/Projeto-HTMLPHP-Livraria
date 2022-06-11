<?php
include 'connect.php';
$idLivro = filter_input(INPUT_POST, 'idLivro', FILTER_SANITIZE_NUMBER_INT);
$nomeLivro = filter_input(INPUT_POST, 'nomeLivro', FILTER_SANITIZE_STRING);
$nomeAutor = filter_input(INPUT_POST, 'nomeAutor', FILTER_SANITIZE_STRING);
$editor = filter_input(INPUT_POST, 'editor', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
$dataLancamento = filter_input(INPUT_POST, 'dataLancamento', FILTER_SANITIZE_STRING);
$sqledit = "UPDATE cadastrolivro
SET nomeLivro='$nomeLivro',nomeAutor='$nomeAutor',editor='$editor',preco=$preco,quantidade=$quantidade,dataLancamento='$dataLancamento' WHERE idLivro={$idLivro};";
$resultedit = $con->query($sqledit);
header('Location: editarLivro.php');
?>
