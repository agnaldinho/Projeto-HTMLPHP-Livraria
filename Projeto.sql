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