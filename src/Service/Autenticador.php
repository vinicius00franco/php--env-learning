<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador 
{
    public function tentaLogin(Autenticavel $diretor, string $senha)
    {
        if ($diretor->podeAutenticar($senha))
        {
            echo "Usuário logado no sistema";
        } else {
            echo "Ops.Senha Incorreta!!";
        }
    }
}