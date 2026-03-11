<?php
namespace ScreenMatch\Calculos;
use ScreenMatch\Modelo\Avaliavel;//informa que vai utilizar outro namespace, outro caminho
class ConversorNotaEstrela{

    public function converte(Avaliavel $avaliavel):float{
        $nota = $avaliavel->media();
        return round($nota) / 2;
    }
}