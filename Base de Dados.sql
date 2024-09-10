CREATE TABLE endereco (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rua VARCHAR(255) NOT NULL,
    bairro VARCHAR(100),
    provincia VARCHAR(2) NOT NULL,
    pais VARCHAR(50) NULL,
    enderecoDetalhado VARCHAR(200)
);

CREATE TABLE contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    telefone VARCHAR(20),
    telefoneOP VARCHAR(20),
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
    familia VARCHAR(255) NOT NULL,
    descricao TEXT,
);

CREATE TABLE curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL NOT NULL,
    descricao TEXT,
    data_inicio DATE,
    data_fim DATE foto VARCHAR(255) NOT NULL,
);

CREATE TABLE modulo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    curso_id INT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    data_inicio DATE,
    data_fim DATE,
    qtd_licoes INT,
    id_us int,
    FOREIGN KEY (curso_id) REFERENCES curso(id) FOREIGN KEY (id_us) REFERENCES users(id)
);

CREATE TABLE departamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    hora_entrada TIME NOT NULL,
    hora_fechamento TIME NOT NULL,
    id_us int,
    FOREIGN KEY (id_us) REFERENCES users(id)
);

CREATE TABLE funcionario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    genero VARCHAR(50),
    estado_civil VARCHAR(50),
    nacionalidade VARCHAR(100),
    provincia VARCHAR(100),
    municipio VARCHAR(100),
    bi VARCHAR(16),
    cargo VARCHAR(100),
    salario DECIMAL(10, 2),
    data_contratacao DATE,
    data_nascimento DATE,
    foto VARCHAR(255),
    nivel_escolaridade VARCHAR(100),
    linguas VARCHAR(100),
    nome_banco VARCHAR(100),
    --Nome do banco onde o funcionário tem conta.
    num_conta_banco INT,
    iban VARCHAR(100),
    status VARCHAR(50),
    --Status do funcionário (ativo, inativo, demitido, em ferias, suspenso).
    documento VARCHAR(50),
    tipo VARCHAR(50),
    -- formador, limpeza, funcionario normal
    departamento_id INT,
    contacto_id INT,
    endereco_id INT,
    id_ud INT,
    FOREIGN KEY (departamento_id) REFERENCES departamento(id),
    FOREIGN KEY (contacto_id) REFERENCES contacto(id),
    FOREIGN KEY (endereco_id) REFERENCES endereco(id) FOREIGN KEY (id_ud) REFERENCES users(id)
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

CREATE TABLE SALA (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao TEXT,
    capacidade INT,
    --QUANTIDADE DE ALUNOS
    tipo TEXT,
    --TEORICA, PRATICA
);
select capacidade where id
CREATE TABLE turma (
    turma_id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    sala_id INT,
    funcionario_id INT, -- selecionar apenas formadores no combobox
    horario_ENTRADA VARCHAR(50),
    horario_SAIDA VARCHAR(50),
    FOREIGN KEY (sala_id) REFERENCES sala(id),
    FOREIGN KEY (funcionario_id) REFERENCES funcionario(id)
);

-- uma turma pode ter 1 ou varios formandos e um formando pode fazer parte de uma ou varias turmas
-- turma_formando
CREATE TABLE turma_formando_relacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    turma_id int,
    formando_id INT,
    FOREIGN KEY (turma_id) REFERENCES turma(turma_id),
    FOREIGN KEY (formando_id) REFERENCES formando(id)
);

CREATE TABLE Pagamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50),
    -- transferencia, dinheiro em mão
    data_pagamento DATE,
    valor DECIMAL(10, 2),
    em_falta DECIMAL(10, 2),
    percentagem int --50%, 70%, 100%
    estado VARCHAR(100),
    -- em falta, pago
)
