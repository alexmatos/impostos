<?php

abstract class TemplateDeImpostoCondicional extends Imposto {

    public function calcular(Orcamento $orcamento) {
        if ($this->deveUsarMaximo($orcamento)) {
            return $this->taxacaoMaxima($orcamento);
        } else {
            return $this->taxacaoMinima($orcamento);
        }
    }

    protected abstract function deveUsarMaximo(Orcamento $orcamento);

    public abstract function taxacaoMaxima(Orcamento $orcamento);

    public abstract function taxacaoMinima(Orcamento $orcamento);
}
