<?php

class CalculadoraDeImpostos {

    function calcular(Orcamento $orcamento, Imposto $imposto) {
        echo $imposto->calcular($orcamento);
    }

}
