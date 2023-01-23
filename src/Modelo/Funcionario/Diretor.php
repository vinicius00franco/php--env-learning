<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao()
    {
        return $this->salario * 0.5;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha == "1234";
    }
}