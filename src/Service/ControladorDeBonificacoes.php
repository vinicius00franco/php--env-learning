<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes 
{
    private float $amountBonificacao = 0;

    public function addToAmountBonificacao(Funcionario $employe)
    {
        $this->amountBonificacao += $employe->calculaBonificacao();
    }

    public function getAmountBonificacao():float
    {
        return $this->amountBonificacao;
    }
}