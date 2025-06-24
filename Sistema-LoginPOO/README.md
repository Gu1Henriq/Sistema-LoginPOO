# # Sistema de login e Cadastro

# Modelo de Documentação para Aplicação PHP com MySQL
## 1 Introdução 
- *Nome do Projeto:* Sistema de login em POO (CRUD)
- *Descrição:* Este projeto tem como objetivo criar um sistema de cadastro e login com dados salvos no banco de dados, onde podemos cadastrar, editar e excluir as informações. 
- *Tecnologias Utilizadas:* PHP, MySQL, CSS, Xampp.
- *Autor(es):* Guilherme Henrique Ribeiro
- *Data de início:* 23/06/2025 

## 2 Estrutura do Projeto 

login-poo/
├── config/
│   └── Database.php                # Configuração de conexão PDO com o banco de dados
│
├── models/
│   ├── Usuario.php                 # Classe de entidade do usuário
│   └── UsuarioDAO.php             # Classe DAO para operações no banco
│
├── public/
│   ├── atualizar.php              # Página de formulário para atualização de dados
│   ├── cadastrar.php              # Página de formulário para cadastro
│   ├── deletar.php                # Página de confirmação de exclusão
│   ├── index.html                 # Página inicial ou redirecionamento
│   ├── inicial.css                # Estilos da aplicação
│   ├── login.php                  # Página de login
│   ├── process-atualizar.php     # Lógica de atualização
│   ├── process-cadastro.php      # Lógica de cadastro
│   ├── process-delete.php        # Lógica de exclusão
│   ├── process-login.php         # Lógica de login
│   ├── process-verifica.php      # Verificação de sessão/autenticação
│   └── verificar-atu.php         # Verificação de atualização de dados
│
├── utils/
│   └── Sanitizacao.php            # Funções auxiliares para sanitização e validação

└── README.md

## 3 Configuração do Ambiente 
### *Requisitos* 
- Servidor Apache 
- PHP 8.2.0 
- MySQL  8.0.41.

### *Instalação* 

1. Clone o repositório: 
 bash
 git clone https://github.com/Gu1Henriq/Sistema-LoginPOO.git
 cd Sistema-LoginPOO
 
2. Instale as dependências: 
 bash;
 
3. Configure o banco de dados: 
 - Crie o banco no MySQL 
 - Execute o Dump SQL;
 
 - Configure as credenciais no Config/Database.php
4. Inicie o servidor: 
bash
 php -S localhost:8000 -t public

## 4 Estrutura do Banco de Dados 
-- MySQL Workbench Synchronization
-- Generated: 2025-06-23 18:55
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Guilherme Henrique

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

ALTER SCHEMA `login`  DEFAULT CHARACTER SET utf8  DEFAULT COLLATE utf8_general_ci ;

ALTER TABLE `login`.`usuario` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


## 5 Segurança e Boas Práticas 
- Validação e sanitização de entrada de dados
- 
## 6 Testes 
- Testes manuais de casos de uso.
- 
## 7 Deploy e Hospedagem 
### Configuração no Servidor 
1. Configure um servidor Apache/Nginx 
2. Defina permissões corretas nas pastas 
3. Configure um sistema de logs para monitoramento 
### Banco de Dados 
- Backup regular do banco (mysqldump) 
- Indexação para melhor desempenho