<?php
require_once 'Pagamento.php';

class PagamentoPix extends Pagamento {
    public function processarPagamento(): string {
        return "Pagamento via pix aprovado.";
    }
}