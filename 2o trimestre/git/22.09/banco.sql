CREATE DATABASE IF NOT EXISTS sistema;
USE sistema;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE participantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20)
);

INSERT INTO usuarios (nome, email, senha) VALUES 
('Administrador', 'admin@admin.com', '$2y$10$CMyLIfb.9X7I24U6X0K1.eE89bQ11p9xPqF/uFvA/K3K/8zN3W1Tq');