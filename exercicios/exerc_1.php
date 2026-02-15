<?php

$valores = [];

for($i=1;$i<$argc;$i++){
    $valor[] = (float) $argv[$i];
}

//var_dump($valor);

$arrayFinal = array_unique($valor);

var_dump($arrayFinal);