<?php

class Conta{
    private int $saldo;

    public function __construct(
        public readonly string $titular,
        public readonly TiposContaBancaria $tipo
        ){
            $this->saldo = 0;
    }

    public function depositar(int $valorDepositar):void{
        if($valorDepositar>0){
            $this->saldo += $valorDepositar;
        }
    }

    public function sacar(int $valorSacar):void{
        if($this->saldo >0 && $valorSacar<= $this->saldo){
            $this->saldo -= $valorSacar;
        }
    }
}