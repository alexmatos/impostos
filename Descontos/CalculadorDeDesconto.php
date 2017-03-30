<?php
class CalculadorDeDesconto {

	public function calcula(Orcamento $orcamento) {
		$d1 = new DescontoMaisDe5Itens();
		$d2 = new DescontoMaisDe500Reais();
                $d3 = new DescontoPorVendaCasada();
		$d1->setProximo($d2);
               	$d2->setProximo($d3);
                $d3->setProximo(new SemDesconto());
		return $d1->desconta($orcamento);
	}
}