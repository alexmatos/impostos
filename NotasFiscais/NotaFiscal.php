<?php

/**
 * Description of NotaFiscal
 *
 * @author alex.matos
 */
class NotaFiscal {

    private $razaoSocial;
    private $cnpj;
    private $dataDeEmissao;
    private $valorBruto;
    private $impostos;
    public $itens;
    public $observacoes;

    function __construct($razaoSocial, $cnpj, $dataDeEmissao, $valorBruto, 
            $impostos, $itens, $observacoes) {
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->dataDeEmissao = $dataDeEmissao;
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
        $this->itens = $itens;
        $this->observacoes = $observacoes;
    }
    
    function getValorBruto() {
        return $this->valorBruto;
    }

}
