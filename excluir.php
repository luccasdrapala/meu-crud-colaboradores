<?php

//autoload

use App\Entity\Colaborador;

require_once __DIR__ . '/vendor/autoload.php';

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){

    header('location: index.php?status="erro"');
    exit;
}

//consulta funcionario pelo ID
$colaborador = Colaborador::getColab($_GET['id']);

if(!$colaborador instanceof Colaborador){
    header('location: index.php?status=erro');
    exit;
}

if(isset($_POST['excluir'])){
    
    $colaborador->excluir();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario-excluir.php';
include __DIR__ . '/includes/footer.php';

