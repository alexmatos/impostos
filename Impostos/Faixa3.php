<?php
	class Faixa3 implements IFaixaIccc {
		public function calcular(Orcamento $orcamento) {
			return $orcamento->getValor() * 0.08 + 30;
		}
	}