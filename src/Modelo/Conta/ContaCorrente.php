<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta 
{
    protected function porcentTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino):void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo Indisponível";  
            return;
        }
        $contaDestino->deposita($valorATransferir);
    }
}