<?php

namespace Alura\Banco\Modelo;

class Cpf
{
    public function __construct(private $cpfTitular)
    {
        
       $this->validandoCpf();
    }

    private function validandoCpf(): string
    {
        $cpf = filter_var($this->cpfTitular, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpf === false) {
            echo "Cpf inválido";
            exit();
        }
        return $this->cpfTitular = $cpf;
    }
    

    // getter e setters
    public function getCpfTitular()
    {
        return $this->cpfTitular;
    }

}