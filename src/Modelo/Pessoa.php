<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;

abstract class Pessoa 
{
    use AcessoAsPropriedades;
    
    public function __construct(
        protected string $nome,
        protected Cpf $cpf
    )
    {
        $this->validaNomeTitular($nome);
    }
    
    final protected function validaNomeTitular(string $nomeTitular)
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