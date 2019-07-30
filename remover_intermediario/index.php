<?php declare(strict_types=1);

namespace Alura\RemoverIntermediario;

require 'Funcionario.php';

$funcionario = new Funcionario('Giovanni', 'Instrutor');

echo "<p>{$funcionario->getNome()}</p>";
echo "<p>{$funcionario->getCargo()}</p>";
