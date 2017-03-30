<?php

class EmAprovacao implements EstadoDeUmOrcamento {

    private $descontoAplicado = false;

    public function aplicaDescontoExtra(Orcamento $orcamento) {
        if (!$this->descontoAplicado) {
            $valor = $orcamento->getValor();
            $orcamento->setValor($valor - $valor * 0.05);
            $this->descontoAplicado = true;
        } else {
            throw new Exception("Desconto já aplicado!");
        }
    }

    public function aprova(Orcamento $orcamento) {
        // desse estado posso ir para o estado de aprovado
        $orcamento->setEstado(new Aprovado());
    }

    public function reprova(Orcamento $orcamento) {
        // desse estado posso ir para o estado de reprovado tambem
        $orcamento->setEstado(new Reprovado());
    }

    public function finaliza(Orcamento $orcamento) {
        // daqui não posso ir direto para finalizado
        throw new Exception("Orcamento em aprovação não podem ir para finalizado diretamente");
    }

}
