<?php
    include 'connect.php';
    $idLivro = $_GET['idLivro'];
    $sqlDelete = "delete from cadastroLivro where idLivro=$idLivro;";
    $resultDelete = $con->query($sqlDelete);
    header('Location: excluirlivro.php');
?>




