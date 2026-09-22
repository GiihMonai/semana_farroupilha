-- =====================================================
-- BANCO DE DADOS PARA EXERCÍCIOS DE SQL
-- Curso Técnico em Informática
-- =====================================================

-- Remove o banco caso ele já exista.
-- Isso garante que todos iniciem com os mesmos dados.
DROP DATABASE IF EXISTS dbLoja;

-- Criação do banco
CREATE DATABASE dbLoja
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
USE dbLoja;


-- =====================================================
-- TABELA CLIENTE
-- =====================================================

CREATE TABLE cliente (
cod_cli SMALLINT NOT NULL,
nome_cli VARCHAR(40) NOT NULL,
endereco VARCHAR(60),
cidade VARCHAR(30),
cep CHAR(8),
uf CHAR(2),
PRIMARY KEY (cod_cli)
);


-- =====================================================
-- TABELA VENDEDOR
-- =====================================================

CREATE TABLE vendedor (
cod_vend SMALLINT NOT NULL,
nome_vend VARCHAR(40) NOT NULL,
sal_fixo DECIMAL(10,2) NOT NULL,
faixa_comiss CHAR(1) NOT NULL,
PRIMARY KEY (cod_vend)
);


-- =====================================================
-- TABELA PRODUTO
-- =====================================================

CREATE TABLE produto (
cod_prod SMALLINT NOT NULL,
unid_prod VARCHAR(3) NOT NULL,
desc_prod VARCHAR(40) NOT NULL,
val_unit DECIMAL(10,2) NOT NULL,
PRIMARY KEY (cod_prod)
);


-- =====================================================
-- TABELA PEDIDO
-- =====================================================

CREATE TABLE pedido (
num_ped SMALLINT NOT NULL,
prazo_entr SMALLINT NOT NULL,
cd_cli SMALLINT NOT NULL,
cd_vend SMALLINT NOT NULL,
PRIMARY KEY (num_ped),
FOREIGN KEY (cd_cli)
REFERENCES cliente(cod_cli),
FOREIGN KEY (cd_vend)
REFERENCES vendedor(cod_vend)
);


-- =====================================================
-- TABELA ITEM_PEDIDO
-- =====================================================

CREATE TABLE item_pedido (
no_ped SMALLINT NOT NULL,
cd_prod SMALLINT NOT NULL,
qtd_ped INT NOT NULL,
PRIMARY KEY (no_ped, cd_prod),
FOREIGN KEY (no_ped)
REFERENCES pedido(num_ped),
FOREIGN KEY (cd_prod)
REFERENCES produto(cod_prod)
);


-- =====================================================
-- DADOS DOS CLIENTES
-- =====================================================

INSERT INTO cliente VALUES
(1, 'Carlos Silva', 'Rua das Flores, 120', 'niteroi', '24000000', 'RJ'),
(2, 'Marina Souza', 'Av. Brasil, 450', 'porto alegre', '90000000', 'RS'),
(3, 'Fernanda Lima', NULL, 'niteroi', '24000001', 'RJ'),
(4, 'Joao Pedro', 'Rua XV de Novembro, 80', 'curitiba', '80000000', 'PR'),
(5, 'Amanda Costa', 'Rua das Palmeiras, 90', 'florianopolis', '88000000', 'SC'),
(6, 'Ricardo Alves', 'Av. Paulista, 1500', 'sao paulo', '01000000', 'SP'),
(7, 'Patricia Gomes', NULL, 'campinas', '13000000', 'SP'),
(8, 'Bruno Rocha', 'Rua do Mercado, 25', 'salvador', '40000000', 'BA'),
(9, 'Lucas Martins', 'Rua da Praia, 300', 'porto alegre', '90000100', 'RS'),
(10,'Juliana Ferreira', 'Av. Boa Viagem, 800', 'recife', '50000000', 'PE');


-- =====================================================
-- DADOS DOS VENDEDORES
-- =====================================================

INSERT INTO vendedor VALUES
(1, 'Ana Paula', 2500.00, 'a'),
(2, 'Bruno Silva', 1800.00, 'b'),
(3, 'Carlos Mendes', 3200.00, 'c'),
(4, 'Diego Souza', 1500.00, 'a'),
(5, 'Eduardo Lima', 2700.00, 'b'),
(6, 'Fabio Costa', 2100.00, 'c'),
(7, 'Andre Martins', 1950.00, 'a'),
(8, 'Mariana Lopes', 2300.00, 'b');


-- =====================================================
-- DADOS DOS PRODUTOS
-- =====================================================

INSERT INTO produto VALUES
(100, 'kg', 'Arroz', 5.50),
(101, 'kg', 'Feijao', 7.20),
(102, 'un', 'Sabonete', 2.50),
(103, 'lt', 'Leite', 4.80),
(104, 'cx', 'Chocolate', 12.00),
(105, 'kg', 'Acucar', 3.10),
(106, 'kg', 'Sal', 1.50),
(107, 'un', 'Caneta', 1.20),
(108, 'pct', 'Cafe', 18.50),
(109, 'kg', 'Farinha', 2.80),
(110, 'un', 'Teclado', 85.00),
(111, 'un', 'Mouse', 45.00),
(112, 'un', 'Caderno', 16.00);


-- =====================================================
-- DADOS DOS PEDIDOS
-- =====================================================

INSERT INTO pedido VALUES
(1, 10, 1, 1),
(2, 20, 2, 2),
(3, 15, 3, 3),
(4, 7, 4, 1),
(5, 30, 5, 4),
(6, 12, 6, 5),
(7, 5, 7, 6),
(8, 18, 8, 7),
(9, 9, 1, 3),
(10, 14, 2, 5);


-- =====================================================
-- DADOS DOS ITENS DOS PEDIDOS
-- =====================================================

INSERT INTO item_pedido VALUES
(1, 100, 50),
(1, 101, 20),
(2, 102, 500),
(3, 103, 15),
(3, 104, 10),
(4, 105, 35),
(4, 106, 60),
(5, 107, 100),
(5, 108, 8),
(6, 109, 25),
(6, 110, 3),
(7, 100, 12),
(7, 104, 5),
(8, 101, 18),
(8, 103, 6),
(9, 108, 4),
(9, 110, 2),
(10, 105, 40),
(10, 109, 30);