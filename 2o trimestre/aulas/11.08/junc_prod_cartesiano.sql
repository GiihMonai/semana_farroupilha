CREATE TABLE Profissao (
Codigo INT NOT NULL AUTO_INCREMENT,
Cargo VARCHAR (60) NOT NULL,
PRIMARY KEY (Codigo)
);

CREATE TABLE Cliente (
Codigo INT NOT NULL AUTO_INCREMENT,
Nome VARCHAR (60) NOT NULL,
Data_Nascimento DATE,
Telefone CHAR (8),
Profissao INT,
PRIMARY KEY (Codigo),
FOREIGN KEY (Profissao) REFERENCES Profissao(Codigo)
);

INSERT INTO Profissao VALUES (1,'Programador');
INSERT INTO Profissao VALUES (2,'Analista de BD');
INSERT INTO Profissao VALUES (3,'Suporte');

INSERT INTO Cliente VALUES (1,'João Pereira',19820606,'12345678',1);
INSERT INTO Cliente VALUES (2,'José Manuel',19750801,'21358271',2);
INSERT INTO Cliente VALUES (3,'Maria Mercedes',19851001,'85412587',3);;

SELECT Cliente.Nome,Profissao.Cargo
FROM Cliente,Profissao
WHERE Cliente.Profissao=Profissao.Codigo;

SELECT * FROM Cliente,Profissao;
