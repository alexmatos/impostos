<?php

function importa ($classe) {
    require $classe . ".php";
}

spl_autoload_register('importa');

$func1 = new Funcionario();
$func1->setSalario(3000);
$func1->setCargo(new DBA(new QuinzeOuVinteECincoPorCento()));

$calc1 = new CalculadoraDeSalarios();
echo "Func1: " . $calc1->calcula($func1);

echo "<hr>";

$func2 = new Funcionario();
$func2->setSalario(3000);
$func2->setCargo(new Tester(new DezOuVintePorCento()));

$calc2 = new CalculadoraDeSalarios();
echo "Func2: " . $calc2->calcula($func2);