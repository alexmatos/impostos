<?php

require "../Orcamento.php";
require "../Item.php";

function autoload($class) {
    require "NotasFiscais/" . $class . ".php";
}

spl_autoload_register("autoload");

$builderItem = new ItemBuilder();
$builderItem->comNome("Celular")->comValor(900)->builder();

$acoes[] = new EnviarEmail();
$acoes[] = new NotaFiscalDao();
$acoes[] = new EnviarSms();
$acoes[] = new EnviarImpressora();
$acoes[] = new Multiplicador(2);

$nf = new NotaFiscalBuilder($acoes);
$nf->paraEmpresa("Caelum")
        ->comCnpj("123.456.789/0001-10")
        ->com(new Item("item 1", 100.0))
        ->com(new Item("item 2", 200.0))
        ->com(new Item("item 3", 300.0))
        ->comObservacoes("entregar nf pessoalmente")
        ->naData(date('Y-m-d h:i:s', strtotime("2016-10-31 15:57:39")));
$nf->builder();

echo "<pre>";
echo var_dump($nf);
//echo var_dump($builderItem);
