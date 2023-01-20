<?php

namespace Alura\Banco\Modelo;

class Endereco 
{
    public function __construct(
        private string $cidade,
        private string $bairro,
        private string $rua,
        private string $numeroCasa,

    )
    {}

    public function getCidade()
    {
        return $this->cidade;
    }
    
    public function getBairro()
    {
        return $this->bairro;
    }
    public function getRua()
    {
        return $this->rua;
    }
    public function getNumeroCasa()
    {
        return $this->numeroCasa;
    }
}
