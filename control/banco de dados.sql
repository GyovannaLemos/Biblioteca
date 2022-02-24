create database Desafio_Dev;

use Desafio_Dev;

create table Tb_Biblioteca
(
	Cod_Livro int not null primary key auto_increment,
    Titulo varchar(70) not null,
    Editora varchar(30) not null,
    Foto varchar(250) not null,
    Autores varchar(80) not null
);
