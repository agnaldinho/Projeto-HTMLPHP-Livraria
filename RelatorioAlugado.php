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
$sql="select 
a.idAlivro, cl.idlivro, a.idCliente, c.nomeCliente, cl.nomeLivro, a.datainclusao, a.datadevolucao
from alugarlivro as a
inner join clientes as c on c.idcliente = a.idcliente
inner join cadastrolivro as cl on cl.idlivro = a.idlivro";

$qu=mysqli_query($con,$sql);
while($alugarlivro=  mysqli_fetch_assoc($qu)){
?>
            <td>
                <?php echo $alugarlivro['idAlivro']?>
            </td>
            <td>
                <?php echo $alugarlivro['idlivro']?>
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
