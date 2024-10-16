CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255)
);

CREATE TABLE atividade (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255),
    data DATE,
    materia VARCHAR(255),
    professor VARCHAR(255)
);
