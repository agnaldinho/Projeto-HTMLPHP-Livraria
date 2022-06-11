<?php
include 'connect.php';
$idCliente = $_GET['idCliente'];
$sqlDelete = "delete from clientes where idCliente=$idCliente;";
$resultDelete = $con->query($sqlDelete);
header('Location: excluirCliente.php');
  
   
?>




