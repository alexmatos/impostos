<?php
	class Faixa1 implements IFaixaIccc {
		public function calcular(Orcamento $orcamento) {
			return $orcamento->getValor() * 0.05;
		}
	}