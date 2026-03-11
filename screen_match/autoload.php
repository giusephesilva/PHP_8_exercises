<?php

spl_autoload_register(function (string $className){
    //var_dump($className);
    $caminho = str_replace('ScreenMatch','src',$className).'.php';
    $caminho = str_replace('\\',DIRECTORY_SEPARATOR,$caminho);
    $caminhoCompleto = __DIR__.DIRECTORY_SEPARATOR.$caminho;

    if(file_exists($caminhoCompleto)){
        require_once $caminhoCompleto;
    }  
});//registrando uma função que tentará realizar o autoload
