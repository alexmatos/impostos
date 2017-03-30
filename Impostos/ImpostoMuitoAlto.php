<?php

/**
 * Description of ImpostoMuitoAlto
 *
 * @author alex.matos
 */
class ImpostoMuitoAlto extends Imposto {

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }

    public function calcular(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.2 + $this->calculoDoOutroImposto($orcamento);
    }

}
