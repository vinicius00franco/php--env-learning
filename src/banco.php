<?php

require_once 'Conta.php';

$primeiraConta = new Conta();

var_dump($primeiraConta);
$primeiraConta->deposita(500);

var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta->setCpf('123.456.789-0');

$segundaConta->setNomeTitular('Vinicius');

$segundaConta->saca(300); // isso é ok

var_dump($segundaConta);
$segundaConta->getSaldo();

