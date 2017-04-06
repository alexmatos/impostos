<?php

/**
 * Description of Frete
 *
 * @author alex.matos
 */
class Frete implements ServicoDeEntrega {

    public function para($cidade) {

        if (strtoupper($cidade) == "SAO PAULO") {
            return 15;
        }

        return 30;
    }

}
