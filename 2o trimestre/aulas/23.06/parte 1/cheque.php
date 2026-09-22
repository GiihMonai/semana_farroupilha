<?php
require_once 'pagamento.php';

class Cheque extends Pagamento {
    public string $nro;

    public function __construct($data, $valor, $nro) {
        parent::__construct($data, $valor);
        $this->nro = $nro;
    }

    public function exibirDetalhes(): string {
        return "Cheque - Nº: {$this->nro}";
    }
}