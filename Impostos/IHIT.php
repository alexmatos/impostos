<?php

class IHIT extends TemplateDeImpostoCondicional {

    protected function deveUsarMaximo(Orcamento $orcamento) {
        $noOrcamento = array();
        foreach ($orcamento->getItens() as $item) {
            if (in_array($item->getNome(), $noOrcamento)) {
                return true;
            } else {
                $noOrcamento[] = $item->getNome();
            }
        }
        return false;
    }

    public function taxacaoMaxima(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.13 + 100;
    }

    public function taxacaoMinima(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.01 * count($orcamento->getItens());
    }

}
