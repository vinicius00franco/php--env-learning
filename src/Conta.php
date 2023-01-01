<?php

class Conta
{
    //bastração da minha conta , atributos
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 100;
    
    public function saca(float $valorASacar):void
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponível"; 
            return ;
        }
        $this->saldo -= $valorASacar;
    }
    
    public function deposita(float $valorADepositar):void
    {
        if ($valorADepositar < 0){
            echo "Os valores precisam ser positivos";
            return ;
        } 
        $this->saldo += $valorADepositar;
    }
    
    public function transfere(float $valorATransferir, Conta $contaDestino):void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo Indisponível";  
            return;
        }
        $contaDestino->deposita($valorATransferir);
    }
    
    
    public function getsaldo() : float
    {
        return $this->saldo;
    }
    
    public function getNomeTitular() : string
    {
        return $this->nomeTitular;
    }
    public function setNomeTitular(string $nomeTitular) : void
    {
        $this->nomeTitular = $nomeTitular;
    }
    public function getCpf() : string
    {
        return $this->cpfTitular;
    }
    public function setCpf(string $cpfTitular) : void
    {
        $this->cpfTitular = $cpfTitular;
    }
    
}
