<?php

require __DIR__."/src/Modelo/Filme.php";


echo "Bem vindo(a) ao SCREEN MATCH\n";

$filme = new Filme(nome:'Thor - Ragnarok',anoLancamento:2021,genero:'Super-Herói');


$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);


var_dump($filme);

echo $filme->media()."\n";
echo $filme->anoLancamento();



