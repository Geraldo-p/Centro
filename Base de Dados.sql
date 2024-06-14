CREATE TABLE endereco (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rua VARCHAR(255) NOT NULL,
    numero VARCHAR(10),
    complemento VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    pais VARCHAR(50) NOT NULL
);

CREATE TABLE contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    telefone VARCHAR(20),
    endereco_id INT,
    FOREIGN KEY (endereco_id) REFERENCES endereco(id)
);

CREATE TABLE matricula (
    id INT AUTO_INCREMENT PRIMARY KEY,
    formando_id INT,
    curso_id INT,
    data_matricula DATE,
    FOREIGN KEY (formando_id) REFERENCES formando(id),
    FOREIGN KEY (curso_id) REFERENCES curso(id)
);



CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    data_inicio DATE,
    data_fim DATE
);

CREATE TABLE modulo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    curso_id INT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    data_inicio DATE,
    data_fim DATE,
    FOREIGN KEY (curso_id) REFERENCES curso(id)
);
CREATE TABLE departamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    hora_entrada TIME NOT NULL,
    hora_fechamento TIME NOT NULL
);
CREATE TABLE funcionario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    cargo VARCHAR(100),
    salario DECIMAL(10, 2),
    data_contratacao DATE,
    data_nascimento DATE,
    foto VARCHAR(255),
    departamento_id INT,
    contacto_id INT,
    endereco_id INT,
    linguas VARCHAR(100),
    genero VARCHAR(50),
    estado_civil VARCHAR(50),
    nacionalidade VARCHAR(100),
    numero_bi VARCHAR(50),
    tipo VARCHAR(50), -- formador, limpeza, funcionario normal
    FOREIGN KEY (departamento_id) REFERENCES departamento(id),
    FOREIGN KEY (contacto_id) REFERENCES contacto(id),
    FOREIGN KEY (endereco_id) REFERENCES endereco(id)
);

CREATE TABLE formando (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data_nascimento DATE,
    contacto_id INT,
    endereco_id INT,
    FOREIGN KEY (contacto_id) REFERENCES contacto(id),
    FOREIGN KEY (endereco_id) REFERENCES endereco(id)
);
CREATE TABLE lista_presença (
    id INT AUTO_INCREMENT PRIMARY KEY,
    formando_id INT,
    modulo_id INT,
    data_presenca DATE,
    presente BOOLEAN,
    FOREIGN KEY (formando_id) REFERENCES formando(id),
    FOREIGN KEY (modulo_id) REFERENCES modulo(id)
);

CREATE TABLE SALA
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao TEXT,
    capacidade INT, --QUANTIDADE DE ALUNOS
    tipo TEXT , --TEORICA, PRATICA
);

CREATE TABLE TURMA
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    sala_id INT,
    turma_id int,
    funcionario_id int, -- selecionar apenas formadores no combobox
    formando_id int,
    horario_ENTRADA VARCHAR(50),
    horario_SAIDA VARCHAR(50),
    FOREIGN KEY (sala_id) REFERENCES SALA(id)
    FOREIGN KEY (funcionario_id) REFERENCES funcionario(id)
    FOREIGN KEY (formando_id) REFERENCES formando(id)
    FOREIGN KEY (turma_id) REFERENCES TURMA(id)
);

CREATE TABLE Pagamento
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50), -- transferencia, dinheiro em mão
    data_pagamento DATE,
    valor DECIMAL(10, 2),
    em_falta DECIMAL(10, 2),
    percentagem int --50%, 70%, 100%
    estado VARCHAR(100), -- em falta, pago
)
