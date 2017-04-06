<?php
require 'Boleto.php';
require 'Fatura.php';
require 'MeioPagamento.php';
require 'Pagamento.php';
require 'ProcessadorDeBoletos.php';

$boletos[] = new Boleto(100);
$boletos[] = new Boleto(100);
$boletos[] = new Boleto(100);
$fatura = new Fatura("João", 500);

$processador = new ProcessadorDeBoletos();
$processador->processa($boletos, $fatura);
echo "Foi pago? " . $fatura->isPago();

echo "<hr>";

$boletos = [];
$boletos[] = new Boleto(100);
$boletos[] = new Boleto(100);
$boletos[] = new Boleto(100);
$fatura = new Fatura("João", 300);

$processador->processa($boletos, $fatura);
echo "Foi pago? " . $fatura->isPago();
