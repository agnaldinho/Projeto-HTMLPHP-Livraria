<?php
session_start();
/* print_r($_SESSION); */
if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['pass']) == true))
{
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    header('location:login.php');
}
    $logado = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
  </head>
  <body>
  <STYLE TYPE="text/css">
    BODY {background-image: url(https://s1.1zoom.me/big3/793/Library_Book_532388_1920x1080.jpg); }
</STYLE>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Livraria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrolivro.php">Cadastro de livro</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="relatoriolivro.php">Relatorio de livros cadastrados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Exclusão de livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Alugar livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
    </div>
  </div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>