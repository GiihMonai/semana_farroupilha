SELECT *
FROM A
INNER JOIN B
ON A.Key = B.Key

SELECT Cliente.nome,Profissao.cargo
FROM Cliente INNER JOIN Profissao
ON Cliente.Profissao = Profissao.Codigo;
