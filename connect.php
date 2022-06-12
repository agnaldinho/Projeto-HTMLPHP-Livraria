<?php 
if(!isset($_SESSION)) { 
    session_start(); 
  } 
//              servidor , usuario, senha, nome do banco de dados
$con=  mysqli_connect("localhost","root","","projetohtml");
?>