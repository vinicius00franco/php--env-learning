<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function eh_promovido()
    {
        $this->recebeAumento($this->getSalario()*0.75);
    }
    public function calculaBonificacao()
    {
        return 500.00;
    }
}