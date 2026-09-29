CREATE DATABASE IF NOT EXISTS churrasco;
USE churrasco;

CREATE TABLE IF NOT EXISTS participantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    telefone VARCHAR(20),
    tipo_churrasco VARCHAR(30) NOT NULL,
    acompanhamento VARCHAR(50),
    confirmado BOOLEAN NOT NULL DEFAULT 0,
    pago BOOLEAN NOT NULL DEFAULT 0
);