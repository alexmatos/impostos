<?php
class SemDesconto implements IDesconto {
	private $proximoDesconto;

	public function desconta(Orcamento $orcamento) {
		return 0;
	}

	public function setProximo(IDesconto $proximo) {}
}