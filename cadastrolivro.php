<h1>Cadastro Livro</h1>
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
</form>  
<form method ="POST"  action= "salvarcadastro.php" enctype= "multipart/form-data"> 
    <div class="mb-3">
        <label>Titulo do livro</label>
        <input type="text" name="nomeLivro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nome do autor</label>
        <input type="text" name="nomeAutor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Editora do livro</label>
        <input type="text" name="editora" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço do livro</label>
        <input type="number" name="preco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Quantidade de livros</label>
        <input type="number" name="quantidade" class="form-control">
    </div>
    <div class="mb-3">
        <button class = "btn btn-primary" type="submit">Cadastrar</button>
    </div>
</form>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
