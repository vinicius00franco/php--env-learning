<?php



// src/Modelo

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require 'autoload.php';


$endereco = new Endereco('mogi das cruzes','alvora','x',123);
$Titular = new $Titular('vinicius',new Cpf('123.456.789-50'),$endereco);
$primeira_conta = new ContaCorrente($Titular);

$primeira_conta->deposita(700);
$primeira_conta->transfere(200,$segunda_conta);
var_dump($primeira_conta);
// $segunda_conta = new Conta('123.456.789-10','Cristiana',new Endereco('mogi das cruzes','alvora','x',123));
// $terceira_conta = new Conta('123.456.789-20','Ronaldo',new Endereco('mogi das cruzes','alvora','x',123));