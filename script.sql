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
<<<<<<< HEAD
values ('Wagner Faria dos Santos','admin', 'santos.wagner@outlook.com', '123456', '2017-03-14 15:45:00.000', '2017-03-14 15:45:00.000')
=======
values ('Wagner Faria dos Santos','admin', 'santos.wagner@outlook.com', '123456', '2017-03-14 15:45:00.000', '2017-03-14 15:45:00.000')
>>>>>>> 3ff6d7b877bd1449b5b14efe16d9a09b3052193b
