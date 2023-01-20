<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;

class Pessoa 
{
    public function __construct(
        protected $nome,
        protected Cpf $cpf
    )
    {
        $this->validaNomeTitular($nome);
    }
    
    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
}