CREATE DATABASE php02;

USE php02;

CREATE TABLE clientes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    estadoCivil  VARCHAR(15),
    sexo ENUM('M', 'F')
);