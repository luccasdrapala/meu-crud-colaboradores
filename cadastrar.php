<?php

//autoload
require_once __DIR__ . '/vendor/autoload.php';

use \App\Entity\Colaborador;

$obColab = new Colaborador;



//validação do POST
if(isset($_POST['nome'] , $_POST['funcao'], $_POST['setor'], $_POST['email'], $_POST['ativo'])){
    
    //setando dados do objeto
    $obColab->nome = $_POST['nome'];
    $obColab->funcao = $_POST['funcao'];
    $obColab->setor = $_POST['setor'];
    $obColab->email = $_POST['email'];
    $obColab->ativo = $_POST['ativo'];
    $obColab->cadastrar();

    header('Location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario-cadastrar.php';
include __DIR__ . '/includes/footer.php';

