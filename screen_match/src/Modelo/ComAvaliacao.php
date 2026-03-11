<?php
namespace ScreenMatch\Modelo;
trait ComAvaliacao{// Mecanismo para reutilização de código
    private array $notas = [];

    public function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    public function media():float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }
}