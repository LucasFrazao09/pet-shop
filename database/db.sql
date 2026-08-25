CREATE DATABASE pet_shop_frazao;

USE pet_shop_frazao;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE pets (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_pet VARCHAR(100) NOT NULL,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    raca_pet VARCHAR(100) NOT NULL,
    idade_pet INT,
    tipo_pet VARCHAR(100)
);