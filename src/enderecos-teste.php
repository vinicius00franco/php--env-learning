<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require 'autoload.php';

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numeroCasa
 */


$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'Minha rua',
    '71b'
);
$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);

$desenvolvedor = new Desenvolvedor(
    'Vinicius',
     new Cpf('123.456.789-10'),
      2000
    );
echo $desenvolvedor->cpf .PHP_EOL;

echo $umEndereco->bairro;