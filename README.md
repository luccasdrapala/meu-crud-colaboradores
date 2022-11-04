# meu-crud-colaboradores
Crud de pessoas colaboradoras, o principal intuito é utilizar do PHP e PDO para fazer um programa WEB que insire, altere, atualize e exclua dados do banco de dados.

### Instruções básicas:

Criação do banco de dados MySQL:
```
CREATE DATABASE meu_crud;

CREATE TABLE colaboradores(
	id int not null AUTO_INCREMENT PRIMARY KEY, 
    nome varchar(255) not null,
    funcao varchar(255) not null,
    setor varchar(255) not null,
    email varchar(15),
    ativo ENUM('s','n') NOT null,
    data TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);
```
### Executar o composer

*Necessario que o composer e o PHP esteja instalado, para então executar no terminal o comando:

```
composer install
```
