<?php

class DescontoMaisDe5Itens implements IDesconto {

    private $proximoDesconto;

    public function desconta(Orcamento $orcamento) {
        if (count($orcamento->getItens()) > 5) {
            return $orcamento->getValor() * 0.1;
        }
        return $this->proximoDesconto->desconta($orcamento);
    }

    public function setProximo(IDesconto $proximo) {
        $this->proximoDesconto = $proximo;
    }

}
