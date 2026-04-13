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

ALTER TABLE alunos
ADD FOREIGN KEY (turma_id) REFERENCES turmas(id) ON DELETE CASCADE;

SELECT * FROM turmas;
SELECT * FROM alunos;