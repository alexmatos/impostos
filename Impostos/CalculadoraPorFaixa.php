<?php
	class CalculadoraPorFaixa {

		private $faixa;
		private $orcamento;

		function __construct(Orcamento $orcamento) {
			$this->orcamento = $orcamento;
			$this->obtemFaixa();
		}

		public function calcular() {
			echo $this->faixa->calcular($this->orcamento);
		}

		private function obtemFaixa() {
			$valor = $this->orcamento->getValor();
			if ($valor < 1000) {
				$this->faixa = new Faixa1();
			} 
			if ($valor >= 1000 && $valor <= 3000) {
				$this->faixa = new Faixa2();
			} 
			$this->faixa = new Faixa3();
		}
	}