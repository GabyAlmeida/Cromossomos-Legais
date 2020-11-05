DROP DATABASE GAME;
CREATE DATABASE GAME;
USE GAME;

CREATE TABLE usuario(
	idusuario INT AUTO_INCREMENT,
	nomeusuario VARCHAR(60),
	email VARCHAR(60),
	senha VARCHAR(60),
	tipousuario VARCHAR(5),
	PRIMARY KEY(idusuario)
) engine = innodb;


CREATE TABLE imagens(
	idImagem INT AUTO_INCREMENT,
        idusuario INT,
	caminho VARCHAR(100),
	nomeimagem VARCHAR(60),
	PRIMARY KEY(idImagem),
        FOREIGN KEY(idusuario) REFERENCES usuario(idusuario)
) engine = innodb;

CREATE TABLE tbl_log_usuario(
ID_LOG INT (11)AUTO_INCREMENT,
TABELA VARCHAR(45),
USUARIO VARCHAR (45),
DATA_HORA DATETIME,
ACAO VARCHAR(45),
DADOS VARCHAR(1000),
PRIMARY KEY(ID_LOG)
) engine = innodb;

CREATE TABLE tbl_log_imagem(
ID_LOG INT (11)AUTO_INCREMENT,
TABELA VARCHAR(45),
USUARIO VARCHAR (45),
DATA_HORA DATETIME,
ACAO VARCHAR(45),
DADOS VARCHAR(1000),
PRIMARY KEY(ID_LOG)
) engine = innodb;

INSERT INTO `usuario` (`idusuario`, `nomeusuario`, `email`, `senha`, `tipousuario`) VALUES
(2, 'gabriely', 'gabriely@gmail.com', 'gabriely123', 'admin');