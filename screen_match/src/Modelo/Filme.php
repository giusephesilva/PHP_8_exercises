<?php

class Filme extends Titulo{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos){
            parent::__construct($nome,$anoLancamento,$genero);// Chama o construtor da classe base
    }

    #[Override] //indica que o método será sobreescrito evitando assim erros caso o método for instanciado de forma incorreta
    public function duracaoEmMinutos(): int {
        return $this->duracaoEmMinutos;
    }
}