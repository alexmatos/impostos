<?php
	class Faixa2 implements IFaixaIccc {
		public function calcular(Orcamento $orcamento) {
			return $orcamento->getValor() * 0.07;
		}
	}