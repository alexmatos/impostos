<?php

require "../Orcamento.php";
require "../Item.php";

function autoload($class) {
    require "../Impostos/" . $class . ".php";
}

spl_autoload_register("autoload");

$icpp = new ICPP();
echo "<h3>ICPP</h3>";
$orcamento1 = new Orcamento(400);
echo "Valor do orçamento: " . $orcamento1->getValor();
echo "<br>Valor do imposto: " . $icpp->calcular($orcamento1);

$orcamento2 = new Orcamento(1000);
echo "<br><br>Valor do orçamento: " . $orcamento2->getValor();
echo "<br>Valor do imposto: " . $icpp->calcular($orcamento2);

$ikcv = new IKCV();
echo "<br><h3>IKCV</h3>";
echo "Valor do orçamento: " . $orcamento1->getValor();
echo "<br>Tem item maior do que R$ 100? " . $ikcv->temItemMaiorQue100($orcamento1);
echo "<br>Valor do imposto: " . $ikcv->calcular($orcamento1);

echo "<br><br>Valor do orçamento: " . $orcamento2->getValor();
echo "<br>Tem item maior do que R$ 100? " . $ikcv->temItemMaiorQue100($orcamento2);
echo "<br>Valor do imposto: " . $ikcv->calcular($orcamento2);

$orcamento2->addItem(new Item("Mouse", 101.0));
echo "<br><br>Valor do orçamento: " . $orcamento2->getValor();
echo "<br>Tem item maior do que R$ 100? " . $ikcv->temItemMaiorQue100($orcamento2);
echo "<br>Valor do imposto: " . $ikcv->calcular($orcamento2);

$doisImpostos = new IKCV(new ICPP());
echo "<br><h3>IKCV + ICPP</h3>";
echo "Valor do orçamento: " . $orcamento1->getValor();
echo "<br>Valor do imposto: " . $doisImpostos->calcular($orcamento1);


$doisImpostos = new ICPP(new IKCV());
echo "<br><h3>ICPP + IKCV</h3>";
echo "Valor do orçamento: " . $orcamento2->getValor();
echo "<br>Valor do imposto: " . $doisImpostos->calcular($orcamento2);