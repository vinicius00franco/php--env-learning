<?php

namespace Alura\Banco\Modelo;

class Endereco 
{
    public function __construct(
        private string $cidade,
        private string $bairro,
        private string $rua,
        private string $numero,

    )
    {}

    public function getEndereco()
    {
        return $this->rua . "," . $this->numero . "\n" . $this->bairro . "," . $this->cidade;
    }
}
