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

    private function setConnection(){

        try {

            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die('ERROR CATCH'. $e->getmessage());
        }

    }

 }