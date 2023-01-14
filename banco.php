<?php

require 'autoload.php';

use Alura\Banco\Modelo\{Endereco, Cpf,Funcionario, Pessoa};
use Alura\Banco\Modelo\Conta\{Titular, Conta};
// src/Modelo

$endereco = new Endereco('mogi das cruzes','alvora','x',123);
$primeira_conta = new Conta('123.456.789-01','Vinicius',$endereco);

$primeira_conta->deposita(700);
$primeira_conta->transfere(200,$segunda_conta);

$segunda_conta = new Conta('123.456.789-10','Cristiana',new Endereco('mogi das cruzes','alvora','x',123));
$terceira_conta = new Conta('123.456.789-20','Ronaldo',new Endereco('mogi das cruzes','alvora','x',123));
