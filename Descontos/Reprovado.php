<?php

class Reprovado implements EstadoDeUmOrcamento {

    public function aplicaDescontoExtra(Orcamento $orcamento) {
        throw new Exception("Orçamentos reprovados não recebem desconto extra!");
    }

    public function aprova(\Orcamento $orcamento) {
        throw new Exception("Orçamento já foi reprovado");
    }

    public function finaliza(\Orcamento $orcamento) {
        throw new Exception("Orçamento já foi reprovado");
    }

    public function reprova(\Orcamento $orcamento) {
        throw new Exception("Orçamento já foi reprovado");
    }

}
