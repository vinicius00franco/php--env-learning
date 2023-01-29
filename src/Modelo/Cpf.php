<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    public function __construct(private string $cpf)
    {
        
       $this->validandoCpf();
    }

    private function validandoCpf(): string
    {
        $Cpftovalidated = filter_var($this->cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($Cpftovalidated === false) {
            echo "Cpf inválido";
            exit();
        }
        return $this->cpf = $Cpftovalidated;
    }
    

    // // getter e setters
    // public function getCpfTitular()
    // {
    //     return $this->cpf;
    // }

    public function __toString()
    {
        return "{$this->cpf}";
    }

}