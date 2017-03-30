<?php

class ISS extends Imposto {

//    public function deveUsarMaximo(Orcamento $orcamento) {
//        return $orcamento->getValor() > 300;
//    }
//
//    public function taxacaoMaxima(Orcamento $orcamento) {
//        return $orcamento->getValor() * 0.15 + $this->calculoDoOutroImposto($orcamento);
//    }
//
//    public function taxacaoMinima(Orcamento $orcamento) {
//        return $orcamento->getValor() * 0.1 + $this->calculoDoOutroImposto($orcamento);
//    }

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }

    public function calcular(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06 + $this->calculoDoOutroImposto($orcamento);
    }

}
