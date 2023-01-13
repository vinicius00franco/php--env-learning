<?php
require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Cpf.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Funcionario.php';

use Alura\Banco\Modelo\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;

$vinicius = new Conta('123.456.789-90','Vinicius',new Endereco('mogi das cruzes','alvora','x',123));
//$endereco = new Endereco('ernesto','459','mogi','SP');
//echo $endereco->getEndereco();
// $cpfvincius = new CPF('123.456.789-10');
// $vinicius = new Titular($cpfvincius, 'Vinicius Dias', $endereco);
// $primeiraConta = new Conta($vinicius);
// $primeiraConta->deposita(500);
// $primeiraConta->saca(300); // isso é ok

// echo $vinicius->getNomeTitular() . PHP_EOL;
// echo $cpfvincius->getCpfTitular() . PHP_EOL;
// echo $primeiraConta->getSaldo() . PHP_EOL;

// $patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
// $segundaConta = new Conta($patricia);
// var_dump($segundaConta);

// $outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
// unset($segundaConta);
echo Conta::getNumeroDeContas();