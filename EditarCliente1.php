<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
/* print_r($_SESSION); */
if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['pass']) == true))
{
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    header('location:login.php');
}
    $logado = $_SESSION['user'];
?>
<?php

include 'connect.php';
$idCliente = $_GET['idCliente'];
$sql="select * from clientes where idCliente={$idCliente}";
$query= mysqli_query($con, $sql);
$cadastroCliente=mysqli_fetch_assoc($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <STYLE TYPE="text/css">
    BODY {background-image: url(https://s1.1zoom.me/big3/793/Library_Book_532388_1920x1080.jpg); }
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
            <li><a class="dropdown-item" href="excluirCliente.php">Exclusão de cliente</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form method ="POST"  action= "salvarClienteedit.php" enctype= "multipart/form-data"> 
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3 id= "Cor">Alteração de dados de cliente</h3>
            <p class="blue-text" id= "Cor">Coloque as informações necessarias</p><br><br><br><br>
            <div class="card">
                <h5 class="text-center mb-4">Cadastro</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <input type="hidden" name="idCliente" class="form-control" value= "<?php echo $cadastroCliente['idCliente']?>" >
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome do cliente<span class="text-danger"> *</span></label> <input type="text" name="nomeCliente" class="form-control" value= "<?php echo $cadastroCliente['nomeCliente']?>" ></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de nascimento<span class="text-danger"> *</span></label> <input type="date" name="dataNascimento" class="form-control" value= "<?php echo $cadastroCliente['dataNascimento']?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Endereço<span class="text-danger"> *</span></label> <input type="text" name="endereco" class="form-control" value= "<?php echo $cadastroCliente['endereco']?>"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Número<span class="text-danger"> *</span></label> <input type="number" name="numero" class="form-control" value= "<?php echo $cadastroCliente['numero']?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cidade<span class="text-danger"> *</span></label> <input type="text" name="cidade" class="form-control" value= "<?php echo $cadastroCliente['cidade']?>"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Telefone para contato<span class="text-danger"> *</span></label> <input type="number" name="telefone" class="form-control" value= "<?php echo $cadastroCliente['telefone']?>"></div>
                    </div>
                    <div class="row justify-content-end">
                        <div><br><button class = "btn btn-primary" type="submit">Editar</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
</html>