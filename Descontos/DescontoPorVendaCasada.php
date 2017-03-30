<?php

/**
 * Description of DescontoPorVendaCasada
 *
 * @author alex.matos
 */
class DescontoPorVendaCasada implements IDesconto {

    private $proximoDesconto;

    public function desconta(Orcamento $orcamento) {
        if ($this->existe("CANETA", $orcamento) && $this->existe("LAPIS", $orcamento)) {
            return $orcamento->getValor() * 0.05;
        }
        return $this->proximoDesconto->desconta($orcamento);
    }

    public function setProximo(IDesconto $proximo) {
        $this->proximoDesconto = $proximo;
    }

    private function existe($nomeDoItem, Orcamento $orcamento) {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getNome() == $nomeDoItem)
                return true;
        }
        return false;
    }

}
