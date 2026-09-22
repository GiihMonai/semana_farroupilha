CREATE DATABASE IF NOT EXISTS churrasco CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE churrasco;

-- Exercício 2: Tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- Exercício 3: Tabela de participantes
CREATE TABLE IF NOT EXISTS participantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    telefone VARCHAR(20),
    tipo_churrasco VARCHAR(30) NOT NULL,
    acompanhamento VARCHAR(50),
    confirmado BOOLEAN NOT NULL,
    pago BOOLEAN NOT NULL
);

-- Usuário padrão para login (Senha: 123456)
INSERT INTO usuarios (nome, email, senha) VALUES 
('Organizador', 'admin@ifrs.edu.br', '$2y$10$wO8IeY7yvR6lXf4XgJ7j/eJ5K1jE7K5J7K5J7K5J7K5J7K5J7K5J7');