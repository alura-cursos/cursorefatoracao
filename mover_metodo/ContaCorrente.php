<?php declare(strict_types=1);

namespace Alura\MoverMetodo;

class ContaCorrente
{
    private $correntista;

    public function __construct(Correntista $correntista)
    {
        $this->correntista = $correntista;
    }

    public function exibeNomeCorrentista(): string
    {
        return $this->correntista->getNomeCompleto();
    }
}
