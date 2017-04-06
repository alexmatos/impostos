<?php

/**
 * Description of Cargo
 *
 * @author alex.matos
 */
class Cargo {

    private $regra;

    function __construct(RegraDeCalculo $regra) {
        $this->regra = $regra;
    }

    public function getRegra() {
        return $this->regra;
    }

}
