<?php

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel{ //informa que a classe não pode ser instanciada diretamente, ela é uma classe 'base' para ser herdada  
   
    use ComAvaliacao;//Ele pega tudo que tem dentro de uma trait, copiar e colar nesse espaço

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero){
    }
     
    abstract public function duracaoEmMinutos(): int;//informa que o método é abstrato e precisa ser especializado na classe filho
}