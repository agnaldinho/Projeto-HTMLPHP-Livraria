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
<!doctype html>
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
    <style>
        #Cor
        {
            text-align: center;
            color: white;     
        }
      </style>
  <STYLE TYPE="text/css">
    BODY {background-image: url(https://img.freepik.com/fotos-gratis/fundo-de-livros-antigos-estante-de-biblioteca-vintage_53876-160402.jpg?t=st=1654960452~exp=1654961052~hmac=3a974d003d79d2879479ce53f4f94e86854f22124000c5ac748a9bcceb5af4ee&w=1380); }
</STYLE>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Livraria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastrolivro.php">Cadastrar Livro</a></li>
            <li><a class="dropdown-item" href="cadastrocliente.php">Cadastrar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Relatorios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="RelatorioAlugado.php">Relatorio de livros alugados</a></li>
            <li><a class="dropdown-item" href="relatoriocliente.php">Relatorio de clientes cadastrados</a></li>
            <li><a class="dropdown-item" href="Relatoriolivro.php">Relatorio de livros cadastrados</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alterar informações
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="EditarCliente.php">Alterar dados de cliente</a></li>
            <li><a class="dropdown-item" href="EditarLivro.php">Alterar dados de livro</a></li>
            <li><a class="dropdown-item" href="excluircliente.php">Exclusão de cliente</a></li>
            <li><a class="dropdown-item" href="excluirlivro.php">Exclusão de livro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Alugarlivro.php">Alugar Livro</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="devolucaolivro.php">Devolução de Livro</a>
          </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
      <a class="btn btn-black" href="logout.php">Sair</a>
      </form>
    </div>
  </div>
  </nav>
</form>  
<form method ="POST"  action= "salvarcadastro.php" enctype= "multipart/form-data"> 
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3 id= "Cor">Cadastro do livro</h3>
            <p class="blue-text" id= "Cor">Coloque as informações necessarias</p><br><br><br><br>
            <div class="card">
                <h5 class="text-center mb-4">Cadastro</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome do livro<span class="text-danger"> *</span></label> <input type="text" name="nomeLivro" class="form-control"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome do autor<span class="text-danger"> *</span></label> <input type="text" name="nomeAutor" class="form-control"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome da editora<span class="text-danger"> *</span></label> <input type="text" name="editor" class="form-control"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Preço do livro<span class="text-danger"> *</span></label> <input type="float" name="preco" class="form-control"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Quantidade de livro<span class="text-danger"> *</span></label> <input type="number" name="quantidade" class="form-control"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de Lançamento<span class="text-danger"> *</span></label> <input type="date" name="dataLancamento" class="form-control"></div>
                    </div>
                    <div class="row justify-content-end">
                        <div><br><button class = "btn btn-primary" type="submit">Cadastrar</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
