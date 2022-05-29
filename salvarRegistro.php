<?php
include 'connect.php';

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

$sql= "insert into usuarios (usuario, senha) values ('$usuario', '$senha');";
$res= $con->query($sql);

header('location:index.php');