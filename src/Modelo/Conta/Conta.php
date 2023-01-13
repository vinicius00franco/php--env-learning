<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;

class Conta
{
    private static $numeroDeContas = 0;
    
    public function __construct
    (
        private Titular $Titular,
        private $saldo = 0,
        private Endereco $endereco,
    )
    {
        self::$numeroDeContas++;
        $Titular = new Titular(new Cpf($Titular->getCpf()),$Titular->getNome(),$endereco);
    }
    // ao constrir é atribuido a static $numero de contas que mais uma conta foi criada
    // porem, se for instanciado um objeto sem uma referencia, precisa ser apagado da static $numero de contas
    public function __destruct()
    {
        self::$numeroDeContas--;
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
    
    public function getSaldo() : float
    {
        return $this->saldo;
    }
        
}
