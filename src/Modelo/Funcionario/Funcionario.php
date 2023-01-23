<?php 

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa,Cpf};

abstract class  Funcionario extends Pessoa
{
    public function __construct
    (
        string $nome,
        Cpf $cpf,
        protected string $salario,
    )
    {
        parent::__construct($nome,$cpf);
    }

    public function recebeAumento(float $valorAumento):void
    {
        if ($valorAumento < 0){
            echo "O valor tem que ser positivo!!";
            return;
        }
    }
    

    abstract public function calculaBonificacao();


    public function getSalario(): float
    {
        return $this->salario;
    }

}