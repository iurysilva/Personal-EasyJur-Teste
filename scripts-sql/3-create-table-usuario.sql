USE easyjur;
CREATE OR REPLACE TABLE usuario (id INT AUTO_INCREMENT PRIMARY KEY,
                                 nome VARCHAR(50) charset utf8 UNIQUE,
                                 telefone VARCHAR(11) UNIQUE,
                                 email varchar(255) UNIQUE,
                                 senha varchar(255));
