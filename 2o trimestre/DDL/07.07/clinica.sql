CREATE DATABASE clinica;
USE clinica;
CREATE TABLE  sala (
    numero_sala int(3),
    andar int(3),
    CONSTRAINT CK_sala_numero_sala
    	CHECK (numero_sala > 1 AND numero_sala < 50),
    CONSTRAINT CK_sala_andar CHECK (andar <12),
    CONSTRAINT PK_sala PRIMARY KEY(numero_sala,andar)
);
CREATE TABLE medicos (
    crm VARCHAR(15),
    nome VARCHAR(40),
    idade INT(2),
    especialidade CHAR(20) DEFAULT 'Ortopedia',
    cpf VARCHAR(15),
    data_admissao DATE,
    
    CONSTRAINT PK_medicos PRIMARY KEY (crm),
    CONSTRAINT UN_medicos_crm UNIQUE (crm),
    CONSTRAINT UN_medicos_cpf UNIQUE (cpf),
    
    CONSTRAINT CK_medicos_idade CHECK (idade > 23)
);
CREATE TABLE Pacientes (
    RG VARCHAR(15) NOT NULL UNIQUE,
    Nome VARCHAR(40) NOT NULL,
    Data_Nascimento DATE,
    Cidade CHAR(30) DEFAULT 'Itabuna',
    Doenca VARCHAR(40) NOT NULL,
    Plano_Saude VARCHAR(40) NOT NULL DEFAULT 'SUS'
);
CREATE TABLE Funcionarios (
    Matricula VARCHAR(15) NOT NULL UNIQUE,
    Nome VARCHAR(40) NOT NULL,
    Data_Nascimento DATE NOT NULL,
    Data_Admissao DATE NOT NULL,
    Cargo VARCHAR(40) NOT NULL DEFAULT 'Assistente Médico',
    Salario FLOAT NOT NULL DEFAULT 510.00
);
CREATE TABLE Consultas (
    Codigo_Consulta INT NOT NULL UNIQUE,
    Data_Horario DATETIME
);