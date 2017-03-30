<?php

require "../Orcamento.php";
require "../Item.php";

function autoload($class) {
    require "../Impostos/" . $class . ".php";
}

spl_autoload_register("autoload");

$ihit = new IHIT();
echo "<h3>IHIT</h3>";
$orcamento1 = new Orcamento(1000);
$orcamento1->addItem(new Item('chocolate', 10));
$orcamento1->addItem(new Item('chocolate', 100));
echo "Valor do orçamento: " . $orcamento1->getValor();
echo "<br>Valor do imposto: " . $ihit->calcular($orcamento1);

$orcamento2 = new Orcamento(1000);
$orcamento2->addItem(new Item('chocolate', 10));
$orcamento2->addItem(new Item('café', 100));
echo "<br><br>Valor do orçamento: " . $orcamento2->getValor();
echo "<br>Valor do imposto: " . $ihit->calcular($orcamento2);

