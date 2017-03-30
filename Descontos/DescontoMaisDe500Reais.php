<?php

class DescontoMaisDe500Reais implements IDesconto {

    private $proximoDesconto;

    public function desconta(Orcamento $orcamento) {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        }
        return $this->proximoDesconto->desconta($orcamento);
    }

    public function setProximo(IDesconto $proximo) {
        $this->proximoDesconto = $proximo;
    }

}
