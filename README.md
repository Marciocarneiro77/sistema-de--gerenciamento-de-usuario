# SISTEMA DE GERENCIAMENTO DE USUÁRIOS:

Sistema de gerenciamento de Usuários, faz o cadastro no banco de dados e lista os dados na tela.

TECNOLOGIAS USADAS:

* HTML
* CSS
* Bootstrap
* MySql
* PHP

# SQL PARA A CRIAÇÃO DA TABELA:

CREATE DATABASE bd_cadastro;
CREATE TABLE tb_usuario(
    usuario VARCHAR(20),
    senha VARCHAR(8),
    administrador(3)
);
