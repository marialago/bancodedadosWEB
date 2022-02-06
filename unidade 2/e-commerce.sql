-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2022-02-06 22:25:05.161

-- tables
-- Table: endereco
CREATE TABLE endereco (
    id int NOT NULL AUTO_INCREMENT,
    rua varchar(50) NOT NULL,
    numero int NOT NULL,
    cep int NOT NULL,
    complemento varchar(100) NOT NULL,
    usuarios_id int NOT NULL,
    CONSTRAINT endereco_pk PRIMARY KEY (id)
);

-- Table: usuarios
CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NULL,
    email varchar(40) NULL,
    CONSTRAINT usuarios_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: endereco_usuarios (table: endereco)
ALTER TABLE endereco ADD CONSTRAINT endereco_usuarios FOREIGN KEY endereco_usuarios (usuarios_id)
    REFERENCES usuarios (id);

-- End of file.

