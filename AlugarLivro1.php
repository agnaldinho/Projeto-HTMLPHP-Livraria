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
    BODY {background-image: url(https://initiate.alphacoders.com/images/697/cropped-1920-1080-697523.jpg?2029); }
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
          <a class="nav-link" href="Cadastrocliente.php">Cadastro Clientes</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="relatoriocliente.php">Relatorio de Clientes</a>
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
</form>  
<form method ="POST"  action= "salvarAlugarLivro.php" enctype= "multipart/form-data"> 
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3 id= "Cor">Cadastro do livro</h3>
            <p class="blue-text" id= "Cor">Coloque as informações necessarias</p><br><br><br><br>
            <div class="card">
                <h5 class="text-center mb-4">Cadastro</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Codigo do livro<span class="text-danger"> *</span></label> <input type="number" name="idLivro" class="form-control"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Codigo do cliente<span class="text-danger"> *</span></label> <input type="number" name="idCliente" class="form-control"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de inclusão<span class="text-danger"> *</span></label> <input type="date" name="dataInclusao" class="form-control"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de devolução<span class="text-danger"> *</span></label> <input type="date" name="dataDevolucao" class="form-control"> </div>
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
