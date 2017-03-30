<?php

class ICPP extends TemplateDeImpostoCondicional {

    protected function deveUsarMaximo(Orcamento $orcamento) {
        return $orcamento->getValor() >= 500;
    }

    public function taxacaoMaxima(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.07 + $this->calculoDoOutroImposto($orcamento);
    }

    public function taxacaoMinima(Orcamento $orcamento) {
       return $orcamento->getValor() * 0.05 + $this->calculoDoOutroImposto($orcamento); 
    }

}
