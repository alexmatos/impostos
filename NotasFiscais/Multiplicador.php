<?php

/**
 * Description of Multiplicador
 *
 * @author alex.matos
 */
class Multiplicador implements AcaoAposGerarNota {

    private $fator;

    public function __construct($fator) {
        $this->fator = $fator;
    }

    public function executa(\NotaFiscal $notaFiscal) {
        echo "<br>" . $notaFiscal->getValorBruto() * $this->fator;
    }

}
