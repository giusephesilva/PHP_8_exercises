<?php
namespace ScreenMatch\Modelo;

use ScreenMatch\Exceptions\NotaInvalidaException;

trait ComAvaliacao{// Mecanismo para reutilização de código
    private array $notas = [];

    public function avalia(float $nota):void{

        if($nota<0 || $nota >10){
            throw new NotaInvalidaException();// a contra barra serve pára apontar para o namespace global
        }
        $this->notas[] = $nota;
    }

    public function media():float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }
}