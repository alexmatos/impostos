<?php

require "../Orcamento.php";
require "../Item.php";

function autoload($class) {
    require "../Descontos/" . $class . ".php";
}

spl_autoload_register("autoload");

$calculadora = new CalculadorDeDesconto();

echo "<h3>Desconto mais de 5 itens </h3>";
$orcamento1 = new Orcamento(300);
$orcamento1->addItem(new Item("Tijolo", 50.0));
$orcamento1->addItem(new Item("Cimento", 50.0));
$orcamento1->addItem(new Item("Telha", 50.0));
$orcamento1->addItem(new Item("Pedra", 50.0));
$orcamento1->addItem(new Item("Areia", 50.0));
$orcamento1->addItem(new Item("Cal", 50.0));
echo "Valor do orçamento: " . $orcamento1->getValor();
echo "<br>Valor do desconto (10%): " . $calculadora->calcula($orcamento1);

echo "<h3>Desconto mais de R$ 500 </h3>";
$orcamento2 = new Orcamento(600);
$orcamento2->addItem(new Item("Monitor", 600.0));
echo "Valor do orçamento: " . $orcamento2->getValor();
echo "<br>Valor do desconto (7%): " . $calculadora->calcula($orcamento2);

echo "<h3>Desconto Venda Casada </h3>";
$orcamento3 = new Orcamento(10);
$orcamento3->addItem(new Item("LAPIS", 5));
$orcamento3->addItem(new Item("CANETA", 5));
echo "Valor do orçamento: " . $orcamento3->getValor();
echo "<br>Valor do desconto: " . $calculadora->calcula($orcamento3);

echo "<h3>Sem Desconto </h3>";
$orcamento4 = new Orcamento(100);
$orcamento4->addItem(new Item("Mouse", 100.0));
echo "Valor do orçamento: " . $orcamento4->getValor();
echo "<br>Valor do desconto: " . $calculadora->calcula($orcamento4);