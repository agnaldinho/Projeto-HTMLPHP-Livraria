create table cadastrolivro
(
	idLivro int primary key auto_increment,
    nomeLivro varchar(200) not null,
    nomeAutor varchar(200) not null,
    dataLancamento date not null,
    escritor varchar(200) not null,
    preco double not null,
    quantidade int not null
);

create table usuarios
(
	idusuario int primary key auto_increment,
    usuario varchar(255) not null,
    senha varchar(255) not null
);

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
            <a class="nav-link" href="?page=alterar">Alteração de informação de livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Exclusão de livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Alugar livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pensando...</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
</nav>