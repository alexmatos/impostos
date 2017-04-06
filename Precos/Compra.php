<?php

/**
 * Description of Compra
 *
 * @author alex.matos
 */
class Compra {

    private $valor;
    private $cidade;

    function __construct($valor, $cidade) {
        $this->valor = $valor;
        $this->cidade = $cidade;
    }
    
    function getValor() {
        return $this->valor;
    }

    function getCidade() {
        return $this->cidade;
    }

}
