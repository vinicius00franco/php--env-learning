<?php

use Alura\Banco\Modelo\Conta\{Conta,ContaPoupanca};
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$primeira_conta = new Conta(
    new Titular('Vinicius Franco',
        new Cpf('123.456.789-10'), 
        new Endereco('asdf','asdf','a','123'))
);

$segunda_conta = new ContaPoupanca(
    new Titular('Cristiana Fiusa',
        new Cpf('456.456.789-10'), 
        new Endereco('bbbb','asdf','a','123'))
);
$primeira_conta->deposita(2000);

$primeira_conta->saca(200);

echo "Primeira Conta = " . $primeira_conta->getSaldo() .PHP_EOL;

$segunda_conta->deposita(2000);

$segunda_conta->saca(200);


// $primeira_conta->transfere();

echo "Segunda Conta = " . $segunda_conta->getSaldo();