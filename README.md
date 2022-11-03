# meu-crud-colaboradores
Crud de pessoas colaboradoras

### Instruções básicas:

Criação do banco de dados MySQL:
```
CREATE DATABASE meu_crud;

CREATE TABLE colaboradores(
	id int not null AUTO_INCREMENT PRIMARY KEY, 
    nome varchar(255) not null,
    funcao varchar(255) not null,
    setor varchar(255) not null,
    contato varchar(15),
    ativo ENUM('s','n') NOT null,
    data TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);
```
### Executar o composer

*Necessario que o composer esteja instalado, para então executar no terminal o comando:

```
composer install
```
