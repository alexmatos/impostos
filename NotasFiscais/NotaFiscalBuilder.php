<?php

/**
 * Description of NotaFiscalBuilder
 *
 * @author alex.matos
 */
class NotaFiscalBuilder {

    private $razaoSocial;
    private $cnpj;
    private $valorTotal;
    private $impostos;
    private $itens;
    private $data;
    private $todasAcoesASeremExecutadas;

    function __construct(array $acoes) {
        $this->itens = array();
        $this->valorTotal = 0;
        $this->impostos = 0;
        $this->data = date("Y-m-d h:i:s");
        $this->todasAcoesASeremExecutadas = $acoes;
    }

    public function builder() {

        $notaFiscal = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->data, 
                $this->valorTotal, $this->impostos, $this->itens, $this->observacoes);

        foreach ($this->todasAcoesASeremExecutadas as $acao) {
            $acao->executa($notaFiscal);
        }
        return $notaFiscal;
    }

    public function adicionaAcao(AcaoAposGerarNota $novaAcao) {
        $this->todasAcoesASeremExecutadas[] = $novaAcao;
    }

    public function paraEmpresa($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function comCnpj($cnpj) {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function com(Item $itemNovo) {
        $this->itens[] = $itemNovo;
        $this->valorTotal += $itemNovo->getValor();
        $this->impostos += $itemNovo->getValor() * 0.05;
        return $this;
    }

    public function comObservacoes($observacoes) {
        $this->observacoes = $observacoes;
        return $this;
    }

    public function naData($data) {
        $this->data = $data;
        return $this;
    }

}
