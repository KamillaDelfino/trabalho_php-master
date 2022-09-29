Criação de Tabelas - SQL

CREATE DATABASE dbcarro;
use dbcarro;

CREATE TABLE cliente (
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (50),
    sobrenome VARCHAR (50),
    telefone VARCHAR (50),
    email VARCHAR (50)
);

CREATE TABLE carro (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    marca VARCHAR (50),
    cor VARCHAR (50),
    placa VARCHAR (50),
    modelo VARCHAR (50)
);

CREATE TABLE funcionario (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (50),
    sobrenome VARCHAR (50),
    telefone VARCHAR (50),
    setor VARCHAR (50)
);