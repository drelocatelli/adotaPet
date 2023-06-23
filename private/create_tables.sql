CREATE TABLE IF NOT EXISTS siteConfig (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    slogan VARCHAR(255) NOT NULL,
    descTitle VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    sobre TEXT NOT NULL,
    btnPrincipalTitle VARCHAR(255) NOT NULL,
    btnPrincipalLink VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE mensagem (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    assunto VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL
);


