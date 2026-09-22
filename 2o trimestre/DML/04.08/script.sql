CREATE TABLE alunos (
    id_aluno INT PRIMARY KEY,
    nome VARCHAR(100),
    curso VARCHAR(100),
    cidade VARCHAR(100)
);

CREATE TABLE livros (
    id_livro INT PRIMARY KEY,
    titulo VARCHAR(150),
    autor VARCHAR(100),
    ano_publicacao INT,
    quantidade INT
);

CREATE TABLE emprestimos (
    id_emprestimo INT PRIMARY KEY,
    id_aluno INT,
    id_livro INT,
    data_emprestimo DATE,
    data_devolucao DATE,
    FOREIGN KEY (id_aluno) REFERENCES alunos(id_aluno),
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro)
);

-- Cadastro de alunos
INSERT INTO alunos (id_aluno, nome, curso, cidade) VALUES
(1, 'Lucas Silva', 'Engenharia de Software', 'Caxias do Sul'),
(2, 'Mariana Costa', 'Análise e Desenvolvimento de Sistemas', 'Porto Alegre'),
(3, 'João Pedro', 'Administração', 'Garibaldi'),
(4, 'Ana Julia', 'Design', 'Bento Gonçalves'),
(5, 'Mateus Oliveira', 'Redes de Computadores', 'Farroupilha');

-- Cadastro de livros
INSERT INTO livros (id_livro, titulo, autor, ano_publicacao, quantidade) VALUES
(1, 'Arendiza do SQL', 'João da Silva', 2018, 5),
(2, 'Banco de Dados Relacional', 'Maria Santos', 2020, 8),
(3, 'Estrutura de Dados em C', 'Paulo Souza', 2015, 3),
(4, 'Lógica de Programação', 'Fernanda Lima', 2021, 6),
(5, 'Algoritmos Avançados', 'Roberto Rocha', 2019, 4);

-- Cadastro de um novo aluno
INSERT INTO alunos (id_aluno, nome, curso, cidade) VALUES
(6, 'Carla Mendes', 'Técnico em Informática', 'Bento Gonçalves');

-- Cadastro de um novo livro
INSERT INTO livros (id_livro, titulo, autor, ano_publicacao, quantidade) VALUES
(6, 'Introdução ao SQL', 'Carlos Silva', 2022, 4);

-- Alteração de cidade
UPDATE alunos 
SET cidade = 'Farroupilha' 
WHERE id_aluno = 3;

-- Alteração de curso
UPDATE alunos 
SET curso = 'Técnico em Desenvolvimento de Sistemas' 
WHERE id_aluno = 2;

-- Correção de nome
UPDATE alunos 
SET nome = 'Ana Julia Ferreira' 
WHERE id_aluno = 4;

-- Correção de título de livro
UPDATE livros 
SET titulo = 'Aprendendo SQL do Zero' 
WHERE id_livro = 1;

-- Atualização de quantidade de livros
UPDATE livros 
SET quantidade = 10 
WHERE id_livro = 2;

-- Empréstimo de livro
INSERT INTO emprestimos (id_emprestimo, id_aluno, id_livro, data_emprestimo, data_devolucao) VALUES
(1, 1, 2, CURRENT_DATE, NULL);

-- Novo empréstimo
INSERT INTO emprestimos (id_emprestimo, id_aluno, id_livro, data_emprestimo, data_devolucao) VALUES
(2, 3, 4, CURRENT_DATE, NULL);

-- Baixa no estoque após empréstimo
UPDATE livros 
SET quantidade = quantidade - 1 
WHERE id_livro = 2;

-- Registro de devolução
UPDATE emprestimos 
SET data_devolucao = CURRENT_DATE 
WHERE id_emprestimo = 1;

-- Exclusão de um livro
DELETE FROM livros 
WHERE id_livro = 6;

-- Exclusão de um aluno
DELETE FROM alunos 
WHERE id_aluno = 6;