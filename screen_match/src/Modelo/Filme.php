<?php

class Filme{
    /*private string $nome;//Recomendado explicitar o tipo
    private int $anoLancamento;
    private string $genero;*/
    private array $notas;


    public function __construct(private string $nome,private int $anoLancamento,private string $genero){//Método construtor //alem disso passando o modificador de acesso direto no construtor, gito mesmo ja transforma em atributo sem precisar definir acima
        /*$this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;*/ //como ja inicializou dentro dos parênteses não precisa chamar aqui.
        $this->notas = [];
    }

    public function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    public function media():float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento():int{ //GET anoLancamento
        return $this->anoLancamento;
    }

    /*public function defineAnoLancamento(int $anoLancamento):void{ //SET anoLancamento
        $this->anoLancamento = $anoLancamento;
    }*/
    
    public function nome():string{
        return $this->nome;
    }

    public function genero():string{
        return $this->genero;
    }
}