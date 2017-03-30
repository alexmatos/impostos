<?php

class IKCV extends TemplateDeImpostoCondicional {

    protected function deveUsarMaximo(Orcamento $orcamento) {
        return $orcamento->getValor() > 500 && $this->temItemMaiorQue100($orcamento);
    }

    public function taxacaoMaxima(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.1 + $this->calculoDoOutroImposto($orcamento);
    }

    public function taxacaoMinima(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06 + $this->calculoDoOutroImposto($orcamento);
    }

    public function temItemMaiorQue100(Orcamento $orcamento) {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getValor() > 100)
                return true;
        }
        return false;
    }

}
