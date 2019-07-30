<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Telefone
{
    private $ddd;
    private $telefone;
    private $tipoTelefone;

    public function __construct(
        string $ddd,
        string $telefone,
        string $tipoTelefone
    ) {
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->tipoTelefone = $tipoTelefone;
    }

    public function getTelefoneDdd(): string
    {
        return "{$this->tipoTelefone}: ({$this->ddd}) {$this->telefone}";
    }
}
