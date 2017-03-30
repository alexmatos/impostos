<?php

require "../Orcamento.php";
require "../Item.php";

function autoload($class) {
    require "../Impostos/" . $class . ".php";
}
//function autoload2($class) {
//    require "../Descontos/" . $class . ".php";
//}

spl_autoload_register("autoload");
//spl_autoload_register("autoload2");

$orcamento1 = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();

echo "<br>ISS: ";
$calculadora->calcular($orcamento1, new ISS());
echo "<br>ICMS: ";
$calculadora->calcular($orcamento1, new ICMS());

echo "<br>ICMS + ISS: ";
$impostoComplexo = new ICMS(new ISS());
echo $impostoComplexo->calcular($orcamento1);

echo "<br>Imposto muito alto: ";
$impostoAlto = new ImpostoMuitoAlto();
echo $impostoAlto->calcular($orcamento1);

echo "<br>ICMS + Imposto muito alto: ";
$impostoComplexo = new ImpostoMuitoAlto(new ICMS());
echo $impostoComplexo->calcular($orcamento1);

echo "<br>ICMS + ISS + Imposto muito alto: ";
$impostoComplexo = new ImpostoMuitoAlto(new ICMS(new ISS()));
echo $impostoComplexo->calcular($orcamento1);
//
//echo "<br>";
//echo "500: ";
//$calculadora->calcular($orcamento1, new ICCC());
//
//echo "<br>";
//echo "1000: ";
//$calculadora->calcular(new Orcamento(1000), new ICCC());
//
//echo "<br>";
//echo "5000: ";
//$calculadora->calcular(new Orcamento(5000), new ICCC());
//
//echo "<br><hr><br>";
//
//$orcamento1->addItem(new Item("Tijolo", 250.0));
//$orcamento1->addItem(new Item("Cimento", 250.0));
