<?php
namespace ScreenMatch\Modelo;
class serie extends Titulo{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodio){
            parent::__construct($nome,$anoLancamento,$genero);
    }

    #[Override] //indica que o método será sobreescrito evitando assim erros caso o método for instanciado de forma incorreta
    public function duracaoEmMinutos(): int {
        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodio;
    }
}