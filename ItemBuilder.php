<?php

/**
 * Description of ItemBuilder
 *
 * @author alex.matos
 */
class ItemBuilder {

    private $nome;
    private $valor;

//    function __construct() {
//        $this->nome = "";
//        $this->valor = 0;
//    }

    public function builder() {
        return new Item($this->nome, $this->valor);
    }

    public function comNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function comValor($valor) {
        $this->valor = $valor;
        return $this;
    }

}
