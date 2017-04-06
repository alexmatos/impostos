<?php

function carregaClasse($classe) {
    require $classe . ".php";
}

spl_autoload_register("carregaClasse");

$compra = new Compra(3000, "Sao Paulo");
$tabela = new TabelaDePrecoPadrao();
$entrega = new Frete();

$calculadora = new CalculadoraDePrecos($tabela, $entrega);
echo $calculadora->calcula($compra);

echo "<hr>";
$compra = new Compra(5000, "Campo Grande");
$tabela = new TabelaDePrecoPadrao();
$entrega = new Frete();

$calculadora = new CalculadoraDePrecos($tabela, $entrega);
echo $calculadora->calcula($compra);
