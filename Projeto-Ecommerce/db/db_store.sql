-- cria database;
CREATE DATABASE db_store;

-- seleciona a database;
USE db_store;


-- cria a tabela categoria; --
CREATE TABLE tb_category(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

-- cria a tabela produto; --
CREATE TABLE tb_product(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    price FLOAT(9,2) NOT NULL,
    quantity INT (5) NOT NULL,
    category_id INT (11) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tb_category(name, description) VALUES
("Móveis", "Guarda-Roupas, Racks, Camas Box, Colchões, Mesas, Sofás, Painéis para tv."),
("Informática", "Notebooks, Mouse, HD, Cabo de Rede, Monitores, Impressoras 3D, Desktop."),
(" Aparelhos Celulares", "iPhone 13, iPhone 13 Pro Max, iPhone 12, iPhone 11, iPhone SE, Galaxy A12");


INSERT INTO tb_product(name, description, photo, price, quantity, category_id)
VALUES
("Gabinete Game", "K-Mex", "https://a-static.mlcdn.com.br/800x560/gabinete-gamer-brazilpc-bpc-c3147-black-c-lateral-de-vidro-brazil-pc/uaicomerciodigital/bpcc3147/f24bb14f35d7de8779b7322b20041365.jpg", 179.64, 34, 1),
("Smart TV Led AOC", "3 HDMI", "https://a-static.mlcdn.com.br/800x560/smart-tv-led-aoc-43-full-hd-3-hdmi-1-usb-wi-fi-43s5195-78g/kabum/115085/2e0bd005df6338ea6bf3ef856e2affe9.jpeg", 1.699, 7, 2),
