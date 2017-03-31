<?php

/**
 * Description of EnviarEmail
 *
 * @author alex.matos
 */
class EnviarEmail implements AcaoAposGerarNota{

    public function executa(NotaFiscal $notaFiscal) {
        echo "<br>enviando por e-mail";
    }

}
