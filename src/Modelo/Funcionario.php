<?php 

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    public function __construct
    (
        string $nome,
        Cpf $cpf,
        private string $cargo,
    )
    {
        parent::__construct($nome,$cpf);
        $cpf = new Cpf($cpf);
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    // public function getNome()
    // {
    //     return parent::getNome();
    // }
}