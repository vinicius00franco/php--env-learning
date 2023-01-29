<?php



use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$gerente = new Gerente(
    'Vinicius Franco',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($diretor,"0987");
$autenticador->tentaLogin($gerente,"0987");