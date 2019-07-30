<?php declare(strict_types=1);

namespace Alura\MoverCampo;

class Contato
{
    private $endereco;
    private $telefone;
    private $email;

    public function __construct(
        string $endereco,
        string $telefone,
        string $email
    ) {
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function __toString()
    {
        return "<p>Email: $this->email</p>
                <p>Endereço: $this->endereco</p>
                <p>Telefone: $this->telefone</p>";
    }
}
