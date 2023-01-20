<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

class ContaPoupanca extends Conta
{
    public function saca(float $valorASacar):void
    {
        $valorDaTarifa = $valorASacar * 0.3;
        $valorASacar +=  $valorDaTarifa;
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponível"; 
            return ;
        }
        $this->saldo -= $valorASacar;
    }

    protected function porcentTarifa():float
    {
        return 0.3;
    }
}