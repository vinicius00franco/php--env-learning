<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Pessoa,Cpf,Endereco};

abstract class Titular extends Pessoa
{
    public function __construct
    (
        string $nome,
        Cpf $cpf,
        private Endereco $endereco
    )
    {
        parent::__construct($nome, $cpf);
    }
    // getters e setters 


    public function getEnderecoTitular()
    {
        return $this->endereco;
    }

}