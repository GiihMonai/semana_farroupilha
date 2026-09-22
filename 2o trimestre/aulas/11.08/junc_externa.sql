INSERT INTO Cliente VALUES (4,'Ana Silva',19741004,'78452587',null);

SELECT distinct *
FROM Cliente
LEFT OUTER JOIN Profissao
ON Cliente.Profissao=Profissao.Codigo;

INSERT INTO Profissao VALUES (4,'Testador');
INSERT INTO Profissao VALUES (5,'Gerente');

SELECT *
FROM Cliente
RIGHT OUTER JOIN Profissao
ON Cliente.Profissao = Profissao.Codigo;

SELECT *
FROM Cliente
FULL OUTER JOIN Profissao
ON Cliente.Profissao = Profissao.Codigo;

-- ou

SELECT *
FROM Cliente
LEFT JOIN Profissao
ON Cliente.Profissao=Profissao.Codigo
UNION
SELECT *
FROM Cliente
RIGHT JOIN Profissao
ON Cliente.Profissao=Profissao.Codigo
WHERE Cliente.Profissao IS NULL;