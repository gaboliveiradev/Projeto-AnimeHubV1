CREATE DATABASE AnimeHub;
USE AnimeHub;

CREATE TABLE Usuarios (
    id int auto_increment,
    nick varchar(32) NOT NULL,
    email varchar(150) NOT NULL,
    senha varchar(80) NOT NULL,
    cargo int NOT NULL DEFAULT 0,
    data_cadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    primary key(id)
);