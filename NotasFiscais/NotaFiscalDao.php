<?php

/**
 * Description of EnviarSms
 *
 * @author alex.matos
 */
class NotaFiscalDao implements AcaoAposGerarNota {

    public function executa(NotaFiscal $notaFiscal) {
        echo "Salvando no Banco de Dados.";
    }

}
