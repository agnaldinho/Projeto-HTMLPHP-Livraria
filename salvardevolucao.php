<?php
include 'connect.php';

/* $idLivro=$_POST['idLivro']; */
$idLivro=$_POST['idAlivro'];
/* $idCliente=$_POST['idCliente']; */

$sql= "delete from alugarlivro where idAlivro=$idAlivro;";
/* $sql1 = "update cadastrolivro set quantidade = quantidade + 1 WHERE idLivro = $idLivro;"; */
$res= $con->query($sql);
/* $res1= $con->query($sql1); */
header('location:index.php');
?>