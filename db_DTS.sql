USE db_database;

-- =======================
-- TABELA PRODUTO
-- =======================
CREATE TABLE Produto (
    id_Produto INT AUTO_INCREMENT PRIMARY KEY,
    nome_Produto VARCHAR(100) NOT NULL,
    desc_Produto VARCHAR(255) NOT NULL,
    img_Produto VARCHAR(255) NOT NULL,
    fab_Produto VARCHAR(20) NOT NULL,
    preco_Produto DECIMAL(10,2) NOT NULL,
    estoque_Produto INT NOT NULL,
    datacad_Produto DATE NOT NULL
);

-- =======================
-- TABELA CLIENTE
-- =======================
CREATE TABLE Cliente (
    cpfcnpj_Cliente VARCHAR(14) PRIMARY KEY,
    nome_Cliente VARCHAR(100) NOT NULL,
    email_Cliente VARCHAR(255) NOT NULL UNIQUE,
    tel_Cliente VARCHAR(13),
    senha_Cliente VARCHAR(255) NOT NULL,
    rua_Cliente VARCHAR(255) NOT NULL,
    num_Cliente INT NOT NULL,
    comp_Cliente VARCHAR(255),
    cep_Cliente CHAR(8) NOT NULL
);

-- =======================
-- TABELA VENDEDOR
-- =======================
CREATE TABLE Vendedor (
    cpfcnpj_Vendedor VARCHAR(14) PRIMARY KEY,
    nome_Vendedor VARCHAR(100) NOT NULL,
    email_Vendedor VARCHAR(255) NOT NULL UNIQUE,
    tel_Vendedor VARCHAR(13),
    senha_Vendedor VARCHAR(255_
