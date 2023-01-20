<?php 

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\{Pessoa,Cpf};

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
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

}