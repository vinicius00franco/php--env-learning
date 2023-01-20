<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    protected $saldo = 0;
    private static $numeroDeContas = 0;
    
    public function __construct
    (
        Titular $Titular,
         $saldo = 0,
    )
    {
        self::$numeroDeContas++;
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

    abstract protected function porcentTarifa():float;
       
    public function saca(float $valorASacar):void
    {
        $valorDaTarifa = $valorASacar * $this->porcentTarifa();
        $valorASacar += $valorDaTarifa;
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
    
    
    
    
    
    public static function getNumeroDeContas() :int
    {
        return self::$numeroDeContas;
    }
    
    public function getSaldo() : float
    {
        return $this->saldo;
    }
        
}
