<?php

/**
 * Description of QuinzeOuVintePorCento
 *
 * @author alex.matos
 */
class QuinzeOuVinteECincoPorCento implements RegraDeCalculo  {
    public function calcula(Funcionario $funcionario) {
        if($funcionario->getSalario() > 2000.0) {
            return $funcionario->getSalario() * 0.75;
        }
        else {
            return $funcionario->getSalario() * 0.85;
        }
    }

}