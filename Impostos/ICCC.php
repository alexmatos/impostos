<?php

class ICCC extends Imposto {

    public function calcular(Orcamento $orcamento) {
        $calculaFaixa = new CalculadoraPorFaixa($orcamento);
        $calculaFaixa->calcular();
    }

}
