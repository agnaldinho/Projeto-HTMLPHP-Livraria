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
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
<!--   <STYLE TYPE="text/css">
    BODY {background-image: url(https://s1.1zoom.me/big3/793/Library_Book_532388_1920x1080.jpg); }
</STYLE> -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Codigo de locação</th>
                    <th>Codigo do livro alugado</th>
                    <th>Codigo do cliente</th>
                    <th>Nome do cliente</th>
                    <th>Nome do livro</th>
                    <th>Data de inclusão</th>
                    <th>Data de devolução</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
include 'connect.php';
$sql="select 
a.idAlivro, cl.idLivro, a.idCliente, c.nomeCliente, cl.nomeLivro, a.datainclusao, a.datadevolucao
from alugarlivro as a
inner join clientes as c on c.idcliente = a.idcliente
inner join cadastrolivro as cl on cl.idLivro = a.idLivro";

$qu=mysqli_query($con,$sql);
while($alugarlivro=  mysqli_fetch_assoc($qu)){
?>
            <td>
                <?php echo $alugarlivro['idAlivro']?>
            </td>
            <td>
                <?php echo $alugarlivro['idLivro']?>
            </td>
            <td>
                <?php echo $alugarlivro['idCliente']?>
            </td>
            <td>
                <?php echo $alugarlivro['nomeCliente']?>
            </td>
            <td>
                <?php echo $alugarlivro['nomeLivro']?>
            </td>
            <td>
                <?php echo $alugarlivro['datainclusao']?>
            </td>
            <td>
                <?php echo $alugarlivro['datadevolucao']?>
            </td>
            <td>
            <a class='btn btn-sm btn-primary' href="salvarDevolucao.php?idAlivro=<?php echo $alugarlivro['idAlivro']?>">Devolução</a>
            </td> 
                    </tr>
<?php
}
?>
                  </tbody>
                </table>
              </div>
            </div>
</html>