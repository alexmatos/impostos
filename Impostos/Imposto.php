<?php

abstract class Imposto {

    private $outroImposto;

    function __construct(Imposto $outroImposto = null) {
        $this->outroImposto = $outroImposto;
    }

    public abstract function calcular(Orcamento $orcamento);

    protected function calculoDoOutroImposto(Orcamento $orcamento) {
        if(is_null($this->outroImposto)) return 0;
        return $this->outroImposto->calcular($orcamento);
    }

}
