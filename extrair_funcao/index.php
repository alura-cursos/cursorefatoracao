<?php declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => 5000,
];

//Verifica se o usuário existe
if (array_key_exists("Giovanni", $saldos)) {
    //Se existir, exibe o saldo na tela
    echo "<p>O saldo do Giovanni é: ${saldos['Giovanni']}</p>";
} else {
    //Se não, exibe erro
    echo "<p>Correntista não existente.</p>";
}
