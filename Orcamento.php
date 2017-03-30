<?php

function importa($classe) {
    require '../Descontos/' . $classe . '.php';
}

spl_autoload_register('importa');

class Orcamento {

    private $valor;
    private $itens = array();
    private $estado;

    function __construct($novoValor) {
        $this->valor = $novoValor;
        $this->estado = new EmAprovacao();
    }

    public function addItem(Item $item) {
        $this->itens[] = $item;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getItens() {
        return $this->itens;
    }

    public function aplicaDescontoExtra() {
        $this->estado->aplicaDescontoExtra($this);
    }

    public function aprova() {
        $this->estado->aprova($this);
    }

    public function reprova() {
        $this->estado->reprova($this);
    }

    public function finaliza() {
        $this->estado->finaliza($this);
    }

    public function setEstado(EstadoDeUmOrcamento $estado) {
        $this->estado = $estado;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

}
