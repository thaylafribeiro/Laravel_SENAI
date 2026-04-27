CREATE DATABASE alunoLaravel;
USE alunoLaravel;

CREATE TABLE turmas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    numSala INT,
    serie VARCHAR(255),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE alunos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    turma_id INT,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE informacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    telefone VARCHAR(255) NOT NULL,
    idade INT NOT NULL,
    data_nascimento DATE,
    endereco VARCHAR(255),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

ALTER TABLE alunos
ADD FOREIGN KEY (turma_id) REFERENCES turmas(id) ON DELETE CASCADE;

ALTER TABLE informacoes
ADD FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE;

ALTER TABLE alunos 
ADD telefone VARCHAR(20),
ADD idade INT,
ADD data_nascimento DATE,
ADD endereco VARCHAR(255);

SELECT * FROM turmas;
SELECT * FROM alunos;
SELECT * FROM informacoes;