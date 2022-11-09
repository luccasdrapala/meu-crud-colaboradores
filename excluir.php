<?php

//autoload

use App\Entity\Colaborador;

require_once __DIR__ . '/vendor/autoload.php';

$colaborador = Colaborador::getColab($_GET['id']);

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){

    header('location: index.php?status="erro"');
    exit;
}

//continuar daquiiii (verificar post do formulario)

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario-excluir.php';
include __DIR__ . '/includes/footer.php';

