<?php

namespace App\Entity;

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

    
}
?>