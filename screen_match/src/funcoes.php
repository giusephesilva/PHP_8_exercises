<?php
function exibeMensagemLancamento(int $ano): void {//recomendado colocar o tipo no parametro para evitar possíveis erros / Tipo Void = usado quando a função não possui retorno
    if($ano > 2022){
        echo "Esse filme é um lançamento\n";
    }elseif($ano > 2020 && $ano <= 2022){
        echo "Esse filme ainda é novo\n";
    }else{
        echo "Esse filme é antigo\n";
    }
}

function incluidoNoPlano(bool $planoPrime,int $anoLancamento): bool { // alem do tipo no parametro esta informando o tipo de retorno apos os dois pontos
    return $planoPrime || $anoLancamento < 2020;   
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): array{
    return [
        'nome'   => $nome,
        'ano'    => $anoLancamento,
        'nota'   => $nota,
        'genero' => $genero
    ];
}