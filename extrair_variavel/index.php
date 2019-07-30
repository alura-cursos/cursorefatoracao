<?php declare(strict_types=1);

function verificaSeEmailEhValido(): string
{
    $email = $_GET['email'];
    $mensagem = "O seu e-mail é: " . $_GET['email'];
    $mensagemErro = "O seu e-mail não é válido";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $mensagem;
    } else {
        return $mensagemErro;
    }
}

echo verificaSeEmailEhValido();
