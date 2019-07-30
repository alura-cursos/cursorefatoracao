<?php declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => 5000
];

function exibeSaldoCorrentista(string $nome, array $saldos)
{
    if (array_key_exists($nome, $saldos)) {
        exibeSaldo($nome, $saldos);
    } else {
        exibeErro();
    }
}

function exibeSaldo(string $nome, array $saldos)
{
    echo "<p>O saldo do $nome é: {$saldos[$nome]}</p>";
}

function exibeErro()
{
    echo "<p>Correntista não existente.</p>";
}

exibeSaldoCorrentista("Giovanni", $saldos);
