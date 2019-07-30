<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

require 'Empresa.php';
require 'Funcionario.php';

$empresa = new Empresa();
$funcionario = new Funcionario('Giovanni', 1000);

$empresa->adicionarFuncionario($funcionario);

echo $funcionario->getSalario();
echo "<br>";

$empresa->promoveFuncionario($funcionario, 50);

echo $funcionario->getSalario();
echo "<br>";
