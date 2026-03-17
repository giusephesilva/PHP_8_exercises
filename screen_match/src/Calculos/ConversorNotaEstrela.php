<?php
namespace ScreenMatch\Calculos;

use ArgumentCountError;
use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;//informa que vai utilizar outro namespace, outro caminho
use Throwable;

class ConversorNotaEstrela{

    public function converte(Avaliavel $avaliavel):float{

        try{
            $nota = $avaliavel->media();
            return round($nota) / 2;
        }/* catch(DivisionByZeroError $erro){//Classe padrões do PHP
            return 0;
        } catch(ArgumentCountError $erro){
            echo $erro->getMessage()."\n";
            return 0;
        }*/catch(Throwable){//Catch mais genérico, utilizado para qualquer excessão
            return 0;
        }

        
    }
}