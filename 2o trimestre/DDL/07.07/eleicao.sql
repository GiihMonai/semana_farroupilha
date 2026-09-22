CREATE DATABASE ELEIÇÃO;
USE ELEIÇÃO;

CREATE TABLE Cargo (
    Codigo_Cargo INT NOT NULL,
    Nome_Cargo VARCHAR(30) NOT NULL,
    Salario FLOAT NOT NULL DEFAULT 17000.00,
    Numero_Vagas INT NOT NULL,
    
    CONSTRAINT PK_Cargo PRIMARY KEY (Codigo_Cargo),
    
    CONSTRAINT UN_Nome_Cargo UNIQUE (Nome_Cargo),
    CONSTRAINT UN_Numero_Vagas UNIQUE (Numero_Vagas),
    
    CONSTRAINT CK_Nome_Cargo CHECK (Nome_Cargo NOT IN ('Prefeito', 'Vereador'))
);
CREATE TABLE Candidato (
    Numero_Candidato INT NOT NULL,
    Nome VARCHAR(40) NOT NULL,
    Codigo_Cargo INT NOT NULL,
    Codigo_Partido INT NOT NULL,
    
    CONSTRAINT PK_Candidato PRIMARY KEY (Numero_Candidato),
    
    CONSTRAINT UN_Nome_Candidato UNIQUE (Nome),
    
    CONSTRAINT FK_Candidato_Cargo FOREIGN KEY (Codigo_Cargo) 
        REFERENCES Cargo (Codigo_Cargo),
        
    CONSTRAINT FK_Candidato_Partido FOREIGN KEY (Codigo_Partido) 
        REFERENCES Partido (Codigo_Partido)
);
CREATE TABLE Partido (
    Codigo_Partido INT NOT NULL,
    Sigla CHAR(5) NOT NULL,
    Nome VARCHAR(40) NOT NULL,
    Numero INT NOT NULL,
    
    CONSTRAINT PK_Partido PRIMARY KEY (Codigo_Partido),
    
    CONSTRAINT UN_Sigla_Partido UNIQUE (Sigla),
    CONSTRAINT UN_Nome_Partido UNIQUE (Nome),
    CONSTRAINT UN_Numero_Partido UNIQUE (Numero)
);
CREATE TABLE Eleitor (
    Titulo_Eleitor VARCHAR(30) NOT NULL,
    Zona_Eleitoral CHAR(5) NOT NULL,
    Sessao_Eleitoral CHAR(5) NOT NULL,
    Nome VARCHAR(40) NOT NULL,
    
    CONSTRAINT PK_Eleitor PRIMARY KEY (Titulo_Eleitor),
    
    CONSTRAINT UN_Titulo_Eleitor UNIQUE (Titulo_Eleitor)
);
CREATE TABLE Voto (
    Titulo_Eleitor VARCHAR(30) NOT NULL,
    Numero_Candidato INT NOT NULL,
    
    CONSTRAINT PK_Voto PRIMARY KEY (Titulo_Eleitor),
    
    CONSTRAINT UN_Titulo_Eleitor_Voto UNIQUE (Titulo_Eleitor),
    
    CONSTRAINT FK_Voto_Eleitor FOREIGN KEY (Titulo_Eleitor) 
        REFERENCES Eleitor (Titulo_Eleitor),
        
    CONSTRAINT FK_Voto_Candidato FOREIGN KEY (Numero_Candidato) 
        REFERENCES Candidato (Numero_Candidato)
);