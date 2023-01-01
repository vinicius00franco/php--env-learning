<?php

require_once 'Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->getSaldo() .PHP_EOL;
echo $primeiraConta->getCpf() .PHP_EOL;

$segundaConta = new Conta('698.549.548-10', 'Patricia');
$conta = new Conta('698.549.548-20', 'Cristiana');
var_dump($primeiraConta,$segundaConta,$conta);


new Conta('698.549.548-20', 'Rosana');

echo Conta::getNumeroDeContas().PHP_EOL;