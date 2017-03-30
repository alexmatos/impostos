<?php
interface IDesconto {
	public function desconta(Orcamento $orcamento);
	public function setProximo(IDesconto $proximo);
}