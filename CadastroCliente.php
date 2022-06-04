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
<style>
        #Cor
        {
            text-align: center;
            color: white;     
        }
      </style>
  <STYLE TYPE="text/css">
    BODY {background-image: url(https://initiate.alphacoders.com/images/697/cropped-1920-1080-697523.jpg?2029); }
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
            <li><a class="dropdown-item" href="cadastrolivro.php">Alterar dados de cliente</a></li>
            <li><a class="dropdown-item" href="cadastrocliente.php">Alterar dados de livro</a></li>
            <li><a class="dropdown-item" href="cadastrolivro.php">Exclusão de cliente</a></li>
            <li><a class="dropdown-item" href="excluirlivro.php">Exclusão de livro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Alugarlivro.php">Alugar Livro</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair</a>
          </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  </nav>
    </div>
  </div>
</div>
<form method ="POST"  action= "salvarCliente.php" enctype= "multipart/form-data"> 
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3 id= "Cor">Cadastro de cliente</h3>
            <p class="blue-text" id= "Cor">Coloque as informações necessarias</p><br><br><br><br>
            <div class="card">
                <h5 class="text-center mb-4">Cadastro</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome do cliente<span class="text-danger"> *</span></label> <input type="text" name="nomeCliente" class="form-control"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de nascimento<span class="text-danger"> *</span></label> <input type="date" name="dataNascimento" class="form-control"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Endereço<span class="text-danger"> *</span></label> <input type="text" name="endereco" class="form-control"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Número<span class="text-danger"> *</span></label> <input type="number" name="numero" class="form-control"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cidade<span class="text-danger"> *</span></label> <input type="text" name="cidade" class="form-control"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Telefone para contato<span class="text-danger"> *</span></label> <input type="number" name="telefone" class="form-control"></div>
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