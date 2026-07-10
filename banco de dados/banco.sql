-- Banco de dados usado pelo projeto (config.php aponta para o banco "samuel").
-- Importe este arquivo no phpMyAdmin ou rode no cliente do MySQL.

CREATE DATABASE IF NOT EXISTS samuel
  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE samuel;

CREATE TABLE IF NOT EXISTS cadastro (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  nome       VARCHAR(255),
  idade      INT,
  usuario    VARCHAR(100),
  senha      VARCHAR(255),
  cpf        VARCHAR(20),
  email      VARCHAR(255),
  telefone   VARCHAR(30),
  genero     VARCHAR(20),
  data_nasc  DATE,
  estado     VARCHAR(100),
  cidade     VARCHAR(100)
);
