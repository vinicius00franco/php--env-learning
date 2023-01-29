<?php

namespace Alura\Banco\Modelo;


class Endereco 
{
    use AcessoAsPropriedades;

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

    public function __toString():string
    {
        return "{$this->rua}, {$this->numeroCasa}, {$this->bairro}, {$this->cidade}";
    }
    
}
