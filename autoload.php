<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    echo $nomeCompletoDaClasse .PHP_EOL;
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    echo $$caminhoArquivo .PHP_EOL;

    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    echo $caminhoArquivo .PHP_EOL;


    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});
