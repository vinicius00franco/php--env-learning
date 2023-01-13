<?php

namespace Alura\Banco\Modelo\Conta; 

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    public function __construct
    (
        protected Cpf $cpf,
        protected $nome,
        private Endereco $endereco
        )
    {
        parent::__construct( $nome, $cpf);
        $cpf = new Cpf($cpf);
    }
    // getters e setters 


    public function getEndereco()
    {
        return $this->endereco->getEndereco();
    }

    public function getCpf()
    {
        return $this->cpf->getCpfTitular();
    }
}