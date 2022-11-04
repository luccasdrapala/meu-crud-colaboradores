<?php

namespace App\Entity;
use App\Db\Database;

class Colaborador {

    /**
     * Identificador unico da vaga
     * @var int
     */
    public $id;

    /**
     * Nome do colaborador
     * @var string
     */
    public $nome;

    /**
     * funcao do colaborador
     * @var string
     */
    public $funcao;

    /**
     * setor da empresa que o colaborador trabalho
     * @var string
     */
    public $setor;

    /**
     * email do colaborador
     * @var string
     */
    public $email;

    /**
     * indica se o colaborador esta ativo ou não
     * @var string ('s' ou 'n')
     */
    public $ativo;

    /**
     * data da criação ou modificação da vaga
     * @var timestamp
     */
    public $data;
    
    /**
     * funcao responsavel por cadastrar dados no banco de dados
     * @return boolean
     */
    public function cadastrar(){
        
        //setando a data fora, pois de outra forma deu bug
        $this->data = date('Y-m-d H:i:s');

        //inserindo dados no banco 
        $obDatabase = new Database('colaboradores');

        //a função insert retorna o id da inserção, podendo assim se setado no objeto ($this->id)
        $this->id = $obDatabase->insert([
                            'nome' => $this->nome,
                            'funcao' => $this->funcao,
                            'setor' => $this->setor,
                            'email' => $this->email,
                            'ativo' => $this->ativo,
                            'data' => $this->data
                            ]);
        return true;
    }
}
?>