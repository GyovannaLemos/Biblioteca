create database testebd;

use testebd;

create table Tb_Login
(
	Id_Login int not null primary key auto_increment,
    Email_Login varchar(45) not null,
    Senha_Login varchar(8) not null
);

create table Tb_Cadastro
(
    Id_Cadastro int not null primary key auto_increment,
    Nome_Cadastro varchar(60) not null,
    Endereco_Cadastro varchar(80) not null,
    Telefone_Cadastro varchar(12) not null,
    Data_Nasc_Cadastro date not null,

    Id_Login int not null,
    constraint Id_Login_Cadastro
    foreign key (Id_Login)
    references Tb_Login (Id_Login)
);
