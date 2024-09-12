
CREATE TABLE Pagamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50),
    -- transferencia, dinheiro em mão
    data_pagamento DATE,
    valor DECIMAL(10, 2),
    em_falta DECIMAL(10, 2),
    percentagem int --50%, 70%, 100%
    estado VARCHAR(100),-- em em falta, pago
    formando_id int,
    FOREIGN KEY (formando_id) REFERENCES formando(id),
);

CREATE TABLE matricula (
    id INT AUTO_INCREMENT PRIMARY KEY,
    formando_id INT,
    curso_id INT,
    data_matricula DATE,
    FOREIGN KEY (formando_id) REFERENCES formando(id),
    FOREIGN KEY (curso_id) REFERENCES curso(id)
);
-- ____________________________________________________________________

CREATE TABLE categorias (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    familia VARCHAR(100) NOT NULL,
    descricao TEXT NULL,
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE enderecos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    rua VARCHAR(150) NULL,
    bairro VARCHAR(100) NULL,
    provincia VARCHAR(100) NULL,
    municipio VARCHAR(100) NULL,
    pais VARCHAR(100) NULL,
    enderecoDetalhado VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE cursos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    duracao VARCHAR(255) NULL,
    foto TEXT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    pag_mes DECIMAL(10, 2) NOT NULL,
    data_inicio DATE NULL,
    data_fim DATE NULL,
    descricao TEXT NULL,
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    id_categ BIGINT UNSIGNED,
    FOREIGN KEY (id_categ) REFERENCES categorias(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE modulos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NULL,
    data_inicio DATE NULL,
    data_fim DATE NULL,
    qtd_licoes INT NOT NULL,
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    curso_id BIGINT UNSIGNED,
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE departamentos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NULL,
    hora_entrada TIME NOT NULL,
    hora_fechamento TIME NOT NULL,
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE funcionarios (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    data_nascimento DATE NOT NULL,
    estado_civil VARCHAR(50) NOT NULL,
    nacionalidade VARCHAR(100) NOT NULL,
    provincia VARCHAR(100) NOT NULL,
    municipio VARCHAR(100) NOT NULL,
    bi CHAR(16) NULL,
    cargo VARCHAR(100) NOT NULL,
    salario DECIMAL(10, 2) NULL,
    data_contratacao DATE NULL,
    foto VARCHAR(255) NULL,
    nivel_escolaridade VARCHAR(100) NOT NULL,
    linguas VARCHAR(100) NULL,
    nome_banco VARCHAR(100) NULL,
    num_conta_banco INT NULL,
    iban CHAR(30) NULL,
    status VARCHAR(50) DEFAULT 'Activo',
    documento VARCHAR(255) NULL,
    departamento_id BIGINT UNSIGNED NULL,
    FOREIGN KEY (departamento_id) REFERENCES departamentos(id),
    contacto_id BIGINT UNSIGNED NULL,
    FOREIGN KEY (contacto_id) REFERENCES contactos(id),
    endereco_id BIGINT UNSIGNED NULL,
    FOREIGN KEY (endereco_id) REFERENCES enderecos(id),
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE salas (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    capacidade INT NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE formandos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NULL,
    genero VARCHAR(50) NULL,
    data_nascimento DATE NULL,
    estado_civil VARCHAR(50) NULL,
    nacionalidade VARCHAR(100) NULL,
    provincia VARCHAR(100) NULL,
    municipio VARCHAR(100) NULL,
    bi CHAR(16) NULL,
    instituicao VARCHAR(255) NULL,
    nivel_escolaridade VARCHAR(100) NULL,
    curso VARCHAR(100) NULL,
    periodo VARCHAR(100) NULL,
    situacao VARCHAR(100) NULL,
    foto VARCHAR(255) NULL,
    contacto_id BIGINT UNSIGNED NULL,
    FOREIGN KEY (contacto_id) REFERENCES contactos(id),
    endereco_id BIGINT UNSIGNED NULL,
    FOREIGN KEY (endereco_id) REFERENCES enderecos(id),
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE turmas (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sala_id BIGINT UNSIGNED,
    FOREIGN KEY (sala_id) REFERENCES salas(id),
    funcionario_id BIGINT UNSIGNED,
    FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id),
    horario_ENTRADA TIME NOT NULL,
    horario_SAIDA TIME NOT NULL,
    status VARCHAR(50) DEFAULT 'Disponivel',
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE turma_formandos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    turma_id BIGINT UNSIGNED,
    FOREIGN KEY (turma_id) REFERENCES turmas(id) ON DELETE CASCADE,
    formando_id BIGINT UNSIGNED,
    FOREIGN KEY (formando_id) REFERENCES formandos(id) ON DELETE CASCADE,
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
CREATE TABLE lista_presencas (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    presenca VARCHAR(100) NOT NULL,
    formando_id BIGINT UNSIGNED,
    FOREIGN KEY (formando_id) REFERENCES formandos(id),
    lista_id BIGINT UNSIGNED,
    FOREIGN KEY (lista_id) REFERENCES lista_presenca_principals(id),
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);


CREATE TABLE lista_presenca_principals (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    data_presenca DATE NOT NULL,
    aula_nome VARCHAR(255) NOT NULL,
    modulo_id BIGINT UNSIGNED,
    FOREIGN KEY (modulo_id) REFERENCES modulos(id),
    id_us BIGINT UNSIGNED,
    FOREIGN KEY (id_us) REFERENCES users(id),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
