<?php

enum TiposContaBancaria{
    case Corrente;
    case Investimento;
    case Poupanca;
    case Universitaria;

    public function possuiTaxas():bool{
        return match($this){
            TiposContaBancaria::Corrente, TiposContaBancaria::Investimento => true,
            TiposContaBancaria::Poupanca, TiposContaBancaria::Universitaria => false
        };
    }
}