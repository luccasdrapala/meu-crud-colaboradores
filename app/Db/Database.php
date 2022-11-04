<?php

namespace App\Db;
use PDO;
use PDOException;

class Database {

    //variaveis de conexao com o banco de dados
    const HOST = 'localhost';
    const NAME = 'meu_crud';
    const USER = 'root';
    const PASS = '';

    private $table;
    private $connection;

    //construtor define a tabela e a conexão com o banco
    public function __construct($table = null){
        $this->table = $table;
        $this-> setConnection();
    }

    //funcao que gera a conexao com o banco
    private function setConnection(){

        try {

            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die('ERROR CATCH'. $e->getmessage());
        }
    }

    /**
     * metodo responsavel por executar queries no banco de dados
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query, $params){

        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('ERROR CATCH '. $e->getmessage());
        }
    }

    /**
     * Funcao para inserir dados no banco de dados
     * @param $values array
     * @return integer (id inserido banco)
     */
    public function insert(array $values){

        $campos = array_keys($values);
        $binds = array_pad([], count($campos), '?');//metodo dinamico para criar os binds da query

        //montando a query
        $query = 'INSERT INTO '. $this->table . ' ('. implode(',', $campos). ') VALUES ('. implode(',', $binds). ')';

        //executa o insert
        $this->execute($query, array_values($values));

        //retorna a ultima ID para que a mesma possa ser setada no objeto 
        return $this->connection->lastInsertId();
    }
 }