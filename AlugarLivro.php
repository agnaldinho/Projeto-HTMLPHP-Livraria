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

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Relatorio</title>

  <!-- Custom fonts for this template -->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
          <a class="nav-link" href="Alugarlivro.php">Alugar Livro</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="relatorioAlugado.php">Relatorio de alocação de livro</a>
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
               <a class= 'btn btn-primary' href="alugarlivro1.php">Alugar Livro <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></a>
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

</body>

</html>
