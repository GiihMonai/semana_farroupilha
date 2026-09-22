-- 1
CREATE DATABASE dbempresa;
USE dbempresa;

CREATE TABLE funcionario (
    Matricula INT NOT NULL UNIQUE CHECK (Matricula <= 9999),
    Nome VARCHAR(100) NOT NULL,
    Idade INT NOT NULL,
    Tempo_Servico INT NOT NULL,
    Salario DECIMAL(10, 2) NOT NULL,
    Depto VARCHAR(50),
    Ocupacao VARCHAR(50),
    Regiao VARCHAR(50),
    Projeto VARCHAR(50),
    PRIMARY KEY (Matricula)
);

-- 2
INSERT INTO funcionario (Matricula, Nome, Idade, Tempo_Servico, Salario, Depto, Ocupacao, Regiao, Projeto) VALUES
(130, 'João', 20, 10, 4500.00, 'projeto', 'gerente', 'sul', 'cultural'),
(111, 'Paulo', 18, 2, 1500.00, 'venda', 'vendedor', 'norte', 'todos'),
(103, 'Ana', 32, 15, 3200.00, 'financeiro', 'contador', 'sul', 'todos'),
(112, 'Claudia', 19, 11, 900.00, 'venda', 'vendedor', 'sul', 'todos'),
(131, 'Carlos', 25, 4, 3600.00, 'projeto', 'projeto', 'sul', 'cultural');

-- 3
ALTER TABLE funcionario RENAME COLUMN Depto TO Departamento;

-- 4
ALTER TABLE funcionario ADD Sexo CHAR(1);

UPDATE funcionario SET Sexo = 'M' WHERE Nome IN ('João', 'Paulo', 'Carlos');
UPDATE funcionario SET Sexo = 'F' WHERE Nome IN ('Ana', 'Claudia');

-- 5
SELECT * FROM funcionario ORDER BY Matricula DESC;

-- 6
SELECT COUNT(*) AS Total_Empregados FROM funcionario;

-- 7
SELECT * FROM funcionario WHERE Tempo_Servico BETWEEN 10 AND 12;

-- 8
SELECT Nome, Matricula, Salario FROM funcionario WHERE Salario NOT BETWEEN 1000 AND 3000;

-- 9
SELECT * FROM funcionario WHERE Tempo_Servico IN (2, 4, 10);

-- 10
SELECT Departamento, AVG(Salario) AS Media_Salarial FROM funcionario GROUP BY Departamento;

-- 11
SELECT Matricula, Nome, Tempo_Servico, Salario 
FROM funcionario 
WHERE Tempo_Servico > 6 
  AND Ocupacao != 'gerente' 
  AND Salario > 3000;

-- 12
SELECT DISTINCT Departamento FROM funcionario;

-- 13
SELECT Nome, Salario FROM funcionario WHERE Nome LIKE '%o';

-- 14
SELECT MAX(Salario) AS Maior_Salario FROM funcionario;

-- 15
SELECT Nome, Regiao, Projeto, Salario 
FROM funcionario 
WHERE Sexo = 'M' 
  AND Regiao != 'norte' 
  AND Projeto = 'cultural';

-- 16
SELECT Sexo, COUNT(*) AS Quantidade FROM funcionario GROUP BY Sexo;

-- 17
SELECT Projeto, SUM(Salario) AS Soma_Salarios 
FROM funcionario 
WHERE Salario > 1000 
GROUP BY Projeto;

-- 18
SELECT SUM(Salario) AS Soma_Salarios_Feminino FROM funcionario WHERE Sexo = 'F';

-- 19
SELECT Matricula, Nome FROM funcionario WHERE Ocupacao = 'gerente';

-- 20
SELECT Nome, Salario 
FROM funcionario 
WHERE Departamento = 'venda' 
  AND Tempo_Servico > 3 
  AND Idade < 30;

-- 21
DELETE FROM funcionario 
WHERE Regiao != 'norte' 
  AND Tempo_Servico < 8 
  AND Ocupacao NOT IN ('gerente', 'contador');

-- 22
ALTER TABLE funcionario DROP COLUMN Regiao;

-- 23
DROP TABLE funcionario;