<?php declare(strict_types=1);

namespace Alura\MoverCampo;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $contato;

    public function __construct(
        string $nome,
        string $sobrenome,
        Contato $contato
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->contato = $contato;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function imprimirInformacoes(): void
    {
        echo "<p>-- Informações de contato --</p>";
        echo "<p>Usuário: " . $this->nome . "</p>";
        echo $this->contato;
    }
}
