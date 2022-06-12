<?php
include 'connect.php';

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
if(empty($usuario))
    echo "<script>alert('Falta preencher o usuario')</script>";
else if(empty($senha))
    echo "<script>alert('Falta preencher a senha')</script>";
else
{
    $sql= "insert into usuarios (usuario, senha) values ('$usuario', '$senha');";
    $res= $con->query($sql);
    echo "<script>alert('Usuario Cadastrado')</script>";
}
?>

