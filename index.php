<?php

//autoload

use App\Entity\Colaborador;

require_once __DIR__ . '/vendor/autoload.php';

$colaborador = Colaborador::getVagas();

echo '<pre>';
print_r($colaborador);
echo '</pre>';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem.php';
include __DIR__ . '/includes/footer.php';

