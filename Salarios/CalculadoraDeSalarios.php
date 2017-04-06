<?php

/**
 * Description of CalculadoraDeSalarios
 *
 * @author alex.matos
 */
class CalculadoraDeSalarios {

    public function calcula(Funcionario $funcionario) {
        return $funcionario->getCargo()->getRegra()->calcula($funcionario);
    }

}
