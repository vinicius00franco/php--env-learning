<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao()
    {
        return $this->salario * 0.8;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha == "0987";
    }
}