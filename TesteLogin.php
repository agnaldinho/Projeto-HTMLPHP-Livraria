<?php
session_start();
if(isset($_POST['sub']) && empty($_POST['usuario']) && empty($_POST['senha']))
{
    include_once('connect.php');
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    print_r('Usuario: ' . $user);
    print_r('senha: ' . $pass);
    $sql = "select * from usuarios where usuario = '$user' and senha = '$pass'";
    $result = $con->query($sql);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['user']);
        unset($_SESSION['pass']);
        header('Location: login.php');
    }
    else
    {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        header('Location: index.php');
    }
}
else
{
    header('Location: index.php');
}
?>
