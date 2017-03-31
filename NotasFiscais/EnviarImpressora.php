<?php

/**
 * Description of EnviarSms
 *
 * @author alex.matos
 */
class EnviarImpressora implements AcaoAposGerarNota {

    public function executa(NotaFiscal $notaFiscal) {
        echo "<br>enviando para a impressora...";
    }

}
