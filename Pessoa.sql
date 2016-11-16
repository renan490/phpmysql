create database Pessoa;
create table Pessoa(
Pessoaid int not null auto_increment,
Nome varchar(20),
Sobrenome varchar(20),
Idade int,
Cidade varchar(30),
Trabalho varchar(30),
primary key (Pessoaid))ENGINE = INNODB;
