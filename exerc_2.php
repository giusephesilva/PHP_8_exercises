<?php

$notas = [];

for($i=1;$i<$argc;$i++){
    $notas[] = $argv[$i];
}

foreach($notas as $nota){
    $resultado = $nota >6? "Aprovado" : "Reprovado";
    echo "O aluno foi $resultado, visto que obteve uma nota $nota\n";
}

