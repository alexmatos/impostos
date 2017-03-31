<?php

/**
 * Description of EnviarSms
 *
 * @author alex.matos
 */
class EnviarSms implements AcaoAposGerarNota {

    public function executa(NotaFiscal $notaFiscal) {
        echo "<br>enviando por SMS...";
    }

}
