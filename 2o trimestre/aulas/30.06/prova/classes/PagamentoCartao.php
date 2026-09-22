<?php
require_once 'Pagamento.php';

class PagamentoCartao extends Pagamento {
    public function processarPagamento(): string {
        return "Pagamento via Cartão aprovado."; 
    }
}