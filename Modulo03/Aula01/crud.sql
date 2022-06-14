--selection--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- database;
USE db_escola;

-- insere um registro;
INSERT INTO tb_Professor(nome, cpf, email) VALUES ("Isadora", "11365478910", "isa@gmail.com");

-- insere multiplos registros;
INSERT INTO tb_Professor(nome, cpf, email) 
VALUES 
("Isadora", "16545547891", "isa@gmail.com"),
("Alessandro", "65466478910", "alessandro@gmail.com"),
("João", "87766514914", "joão@gmail.com");

-- excluir um registro;
DELETE FROM tb_Professor WHERE id = '1';

-- excluir todos;
DELETE FROM tb_Professor;

-- editar um registro;
UPDATE tb_Professor SET nome = "Zezinho" WHERE id = "6"; 
UPDATE tb_Professor SET email = "zezinho@gmail.com" WHERE nome = "Zezinho"; 

--editar todos os registros;
UPDATE tb_Professor SET nome = "Adrian";

--seleciona todos os dados;
SELECT * FROM tb_Professor;

-- seleciona todos os dados de um campo especifico;
SELECT * FROM tb_Professor WHERE id = '4';

-- seleciona TODOS dados especificos de uma tabela;
SELECT nome, cpf FROM tb_Professor;