create table usuarios(
	id INT not null AUTO_INCREMENT,
    nome varchar(100) not null,
    login varchar(15) not null,
    email varchar(100) not null,
    senha varchar(100) not null,
    datacadastro datetime not null,
    dataultimoacesso datetime not null,
    PRIMARY KEY ( id )
);

INSERT INTO usuarios(nome, login, email, senha, datacadastro, dataultimoacesso) 
values ('Wagner Faria dos Santos','admin', 'santos.wagner@outlook.com', '123456', '2017-03-14 15:45:00.000', '2017-03-14 15:45:00.000')