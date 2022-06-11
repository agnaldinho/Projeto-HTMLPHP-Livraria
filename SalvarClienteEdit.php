<?php
include 'connect.php';
$idCliente = filter_input(INPUT_POST, 'idCliente', FILTER_SANITIZE_NUMBER_INT);
$nomeCliente = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$sqledit = "UPDATE clientes
SET nomeCliente='$nomeCliente',dataNascimento='$dataNascimento',endereco='$endereco',numero=$numero,cidade='$cidade',telefone=$telefone WHERE idCliente={$idCliente};";
$resultedit = $con->query($sqledit);
header('Location: editarcliente.php');
?>
