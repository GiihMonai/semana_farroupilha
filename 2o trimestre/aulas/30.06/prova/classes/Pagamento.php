<?php
class Pagamento {
    protected float $valor; 

    public function __construct(float $valor) {$this->valor = $valor; }

    public function processarPagamento(): string {
        return "Processando pagamento de R$ " . number_format($this->valor, 2, ',', '.');
    }
}

