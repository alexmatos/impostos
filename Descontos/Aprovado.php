<?php

/**
 * Description of Aprovado
 *
 * @author alex.matos
 */
class Aprovado implements EstadoDeUmOrcamento {

    private $descontoAplicado = false;

    public function aplicaDescontoExtra(Orcamento $orcamento) {
        if (!$this->descontoAplicado) {
            $valor = $orcamento->getValor();
            $orcamento->setValor($valor - $valor  * 0.02);
            $this->descontoAplicado = true;
        } else {
            throw new Exception("Desconto já aplicado!");
        }
    }

    public function aprova(Orcamento $orcamento) {
        // jah estou em aprovacao
        throw new Exception("Orçamento já está em estado de aprovação");
    }

    public function reprova(Orcamento $orcamento) {
        // nao pode ser reprovado agora!
        throw new Exception("Orçamento está em estado de aprovação e não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento) {
        // daqui posso ir para o estado de finalizado
        $orcamento->setEstado(new Finalizado());
    }

}
