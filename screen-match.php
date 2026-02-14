<?php

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarok";
//$nomeFilme = "Se beber não case";

$anoLancamento = $argv[1]??2020;//valor passado pelo terminal - o indice 0 é o próprio nome do arquivo
$anoLancamento = 2022;
$notaFilme = (9 + 6 + 8 + 7.5 + 5) / 5;
$notaFilme += 10;

$quantidadeNotas = $argc - 1;

$notas = [];

/*for($contador = 1;$contador<$argc;$contador++) {
    $somaDeNotas += $argv[$contador];
}*/

for($contador = 1;$contador<$argc;$contador++) {
    $notas[]  =  (float) $argv[$contador];//converte todos os valores de string para float
}

$somaDeNotas = 0;
/*for($i = 0;$i < count($notas);$i++){ //conta quantos elementos tem o array
    $somaDeNotas += $notas[$i];
}*/

/*foreach($notas as $nota){//uma forma mais facil de iteragir com cada linha de um array sem usar o for
    $somaDeNotas += $nota;
}*/


/*$quantidadeNotas = $argc - 2;
$contador = 1;


while($argv[$contador] != 0){ 
    $somaDeNotas += $argv[$contador++];
}*/

/*do{
    //expressão
}while(true);
*/


//$notaFilme = $somaDeNotas / $quantidadeNotas;
$notaFilme = array_sum($notas) / $quantidadeNotas;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "teste\n";
echo "Nota do filme: $notaFilme\n";
var_dump($incluidoNoPlano);
echo "Ano de lançamento: $anoLancamento\n";

if($anoLancamento > 2022){
    echo "Esse filme é um lançamento\n";
}elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo\n";
}else{
    echo "Esse filme é antigo\n";
}

$genero = match($nomeFilme){
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Genero desconhecido"
};//No php 8 o match entra para substituir o switch, lembrando que é uma expressão entao termina com ponto e virgula e pode ser atibuida a uma variavel ja que retorna valor.


echo "O gênero é : $genero\n";
echo "$argc\n"; // Contém o número de parâmetros passados

/*$filme = [
    "Thor: Ragnarok",
    2021,
    7.8,
    "Super-herói"
]; //Array Simples*/

$filme = [
    "nome"   => "Thor: Ragnarok",
    "ano"    => 2021,
    "nota"   => 7.8,
    "genero" => "Super-herói"
]; //Array dando nome aos indices(dicionario/mapa) - Array Associativo

echo "Nome do filme: ".$filme["nome"];





