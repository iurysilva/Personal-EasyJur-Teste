USE easyjur;
CREATE OR REPLACE TABLE tarefa (id INT AUTO_INCREMENT PRIMARY KEY,
                                nome VARCHAR(20) charset utf8,
                                descricao VARCHAR(100) charset utf8 UNIQUE,
                                data_criacao DATETIME DEFAULT(NOW()),
                                data_conclusao DATETIME NULL,
                                estado ENUM('Pendente', 'Concluído') DEFAULT('Pendente')
                               );
