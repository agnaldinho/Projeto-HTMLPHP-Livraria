<?php
    include 'connect.php';
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
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Relatorio</title>

  <!-- Custom fonts for this template -->
  <link href="startbootstrap-sb-admin-2-gh-pages/vend/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- <STYLE TYPE="text/css">
    BODY {background: url(https://s1.1zoom.me/big3/793/Library_Book_532388_1920x1080.jpg); }
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
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Codigo do Livro</th>
                    <th>Nome do livro</th>
                    <th>Nome do autor</th>
                    <th>Quantidade</th>
                    <th>Locação de livro</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$sql="select * from cadastrolivro";
$qu=mysqli_query($con,$sql);
while($cadastrolivro=  mysqli_fetch_assoc($qu)){
?>
            <td>
                <?php echo $cadastrolivro['idLivro']?>
            </td>
            <td>
                <?php echo $cadastrolivro['nomeLivro']?>
            </td>
            <td>
                <?php echo $cadastrolivro['nomeAutor']?>
            </td>
            <td>
                <?php echo $cadastrolivro['quantidade']?>
            </td>
            <td>
            <a class='btn btn-sm btn-primary' href="exclusaolivro.php?idLivro=<?php echo $cadastrolivro['idLivro']?>">Deletar</a>
            </td>
                    </tr>
<?php
}
?>
                  </tbody>
                </table>
              </div>
            </div>
  <!-- Bootstrap core JavaScript-->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
