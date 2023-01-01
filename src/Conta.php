<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;
    
    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular =  $nomeTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->saldo = 0;
        
        self::$numeroDeContas++;
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular)<5){
            echo "o nome precisa ter mais de 5 caracteres";
            exit();
        }
    }

    
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
    
    public static function getNumeroDeContas() :int
    {
        return self::$numeroDeContas;
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
