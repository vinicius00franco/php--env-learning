<?php

namespace Alura\Banco\Modelo;

trait AcessoAsPropriedades
{
    public function __get(string $name)
    {
        $get_property =  "get" . ucfirst($name);
        return $this->$get_property();
    }
}