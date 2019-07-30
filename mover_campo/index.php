<?php declare(strict_types=1);

namespace Alura\MoverCampo;

require 'Contato.php';
require 'Usuario.php';

$contato = new Contato(
    'Rua Vergueiro 3185',
    '115571-2751',
    'giovanni@alura.com.br'
);

$usuario = new Usuario('Giovanni', 'Tempobono', $contato);

$usuario->imprimirInformacoes();
