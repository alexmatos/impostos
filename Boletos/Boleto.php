<?php

/**
 * Description of Boleto
 *
 * @author alex.matos
 */
class Boleto {

    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }

}

