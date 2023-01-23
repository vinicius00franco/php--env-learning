<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umDesenvolvedor = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umDiretor = new Diretor(
    'Vinicius Dias',
    new Cpf('123.456.789-10'),
    1000
);

$umGerente = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->addToAmountBonificacao($umDesenvolvedor);
$controlador->addToAmountBonificacao($umDiretor);
$controlador->addToAmountBonificacao($umGerente);

echo $controlador->getAmountBonificacao();