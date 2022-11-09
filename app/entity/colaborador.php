<?php

namespace App\Entity;
use App\Db\Database;
use PDO;

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

    public function atualizar(){
        
        //seta a data do momento da alteracao
        $this->data = date('Y-m-d H:i:s');

        //criando objeto do banco
        return (new Database('colaboradores'))->update('id = '.$this->id, [
            'nome' => $this->nome,
            'funcao' => $this->funcao,
            'setor' => $this->setor,
            'email' => $this->email,
            'ativo' => $this->ativo,
            'data' => $this->data
            ]);

    }

    public function excluir(){
        return (new Database('colaboradores'))->delete('id= '.$this->id);
    }

    //metodo estatico para retornar colaboradores do banco (select)
    public static function getColabs(){
        return (new Database('colaboradores'))->select($where = null, $order = null, $limit = null)
        ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    // metodo estatico para receber o colaborador no banco pelo seu id
    public static function getColab($id){
        return(new Database('colaboradores'))->select('id = '.$id)->fetchObject(self::class);
    }
}
?>