CREATE DATABASE produtoLaravel;
USE produtoLaravel;

CREATE TABLE setores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    descricao VARCHAR(100),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE produtos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    quantidade VARCHAR(100),
    preco INT,
    setor_id INT,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

ALTER TABLE produtos
ADD FOREIGN KEY (setor_id) REFERENCES setores(id) ON DELETE CASCADE;

SELECT * FROM setores;
SELECT * FROM produtos;





