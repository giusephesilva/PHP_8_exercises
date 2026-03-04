<?php

abstract class Titulo{ //informa que a classe não pode ser instanciada diretamente, ela é uma classe 'base' para ser herdada  
    private array $notas;


    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero){
            $this->notas = [];
    }

    public function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    public function media():float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }

    abstract public function duracaoEmMinutos(): int;//informa que o método é abstrato e precisa ser especializado na classe filho
}