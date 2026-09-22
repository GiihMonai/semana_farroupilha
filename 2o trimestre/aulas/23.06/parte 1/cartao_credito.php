<?php
require_once 'pagamento.php';

class CartaoCredito extends Pagamento {
    public string $operadora;
    public string $nro;

    public function __construct($data, $valor, $operadora, $nro) {
        parent::__construct($data, $valor);
        $this->operadora = $operadora;
        $this->nro = $nro;
    }

    public function exibirDetalhes(): string {
        return "Cartão de Crédito ({$this->operadora}) - Nº: {$this->nro}";
    }
}