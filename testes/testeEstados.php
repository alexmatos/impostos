<?php

require "../Orcamento.php";

function autoload($class) {
    require "../Impostos/" . $class . ".php";
}

$reforma = new Orcamento(500.0);

echo "Orçamento: " . $reforma->getValor();
echo "<br> Em Aprovação: ";
$reforma->aplicaDescontoExtra();
echo $reforma->getValor() . "<br>"; // imprime 475,00 pois descontou 5%
$reforma->aprova(); // aprova nota!

echo "<br> Aprovado: ";
$reforma->aplicaDescontoExtra();
echo $reforma->getValor() . "<br>"; // imprime 465,50 pois descontou 2%
$reforma->aplicaDescontoExtra();
echo $reforma->getValor() . "<br>"; // imprime 465,50 pois descontou 2%

$reforma->finaliza();

echo "<br> Finalizado: ";
$reforma->aplicaDescontoExtra();
echo $reforma->getValor() . "<br>"; 

$reforma = new Orcamento(1000.0);
echo "<br><br>Orçamento: " . $reforma->getValor();
$reforma->reprova();
echo "<br> Reprovado: ";
$reforma->aplicaDescontoExtra();
echo $reforma->getValor() . "<br>";
