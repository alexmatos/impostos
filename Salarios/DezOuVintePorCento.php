<?php

/**
 * Description of DezOuVintePorCento
 *
 * @author alex.matos
 */
class DezOuVintePorCento implements RegraDeCalculo {

    public function calcula(Funcionario $funcionario) {
        if ($funcionario->getSalario() > 3000.0) {
            return $funcionario->getSalario() * 0.8;
        } else {
            return $funcionario->getSalario() * 0.9;
        }
    }

}
