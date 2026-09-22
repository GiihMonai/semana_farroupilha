-- Criação do banco de dados
CREATE DATABASE REVENDEDORA_CARROS;
USE REVENDEDORA_CARROS;

-- 1. Tabela de Automóveis
CREATE TABLE automovel (
    renavam VARCHAR(11) PRIMARY KEY,
    placa VARCHAR(8) NOT NULL UNIQUE,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    ano_fabricacao INT NOT NULL,
    ano_modelo INT NOT NULL,
    cor VARCHAR(30) NOT NULL,
    motor VARCHAR(20) NOT NULL,
    numero_portas INT NOT NULL,
    tipo_combustivel VARCHAR(30) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

-- 2. Tabela de Clientes
CREATE TABLE cliente (
    codigo_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    complemento VARCHAR(50),
    bairro VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado CHAR(2) NOT NULL,
    cep VARCHAR(9) NOT NULL
);

-- 3. Tabela de Vendedores
CREATE TABLE vendedor (
    codigo_vendedor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    complemento VARCHAR(50),
    bairro VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado CHAR(2) NOT NULL,
    cep VARCHAR(9) NOT NULL,
    data_admissao DATE NOT NULL,
    salario_fixo DECIMAL(10, 2) NOT NULL
);

-- 4. Tabela de Vendas (Relacionamento entre Cliente, Vendedor e Automóvel)
CREATE TABLE venda (
    codigo_venda INT AUTO_INCREMENT PRIMARY KEY,
    data_venda DATE NOT NULL,
    preco_pago DECIMAL(10, 2) NOT NULL,
    renavam_automovel VARCHAR(11) NOT NULL,
    codigo_cliente INT NOT NULL,
    codigo_vendedor INT NOT NULL,
    
    -- Chaves Estrangeiras (Foreign Keys)
    CONSTRAINT fk_venda_automovel FOREIGN KEY (renavam_automovel) REFERENCES automovel(renavam),
    CONSTRAINT fk_venda_cliente FOREIGN KEY (codigo_cliente) REFERENCES cliente(codigo_cliente),
    CONSTRAINT fk_venda_vendedor FOREIGN KEY (codigo_vendedor) REFERENCES vendedor(codigo_vendedor)
);