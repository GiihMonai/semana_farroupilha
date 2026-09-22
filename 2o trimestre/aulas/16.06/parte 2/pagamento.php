<?php
class Pagamento {
    public string $data;
    public float $valor;
    public string $tipo;

    public function __construct($data, $valor, $tipo) {
        $this->data = $data;
        $this->valor = $valor;
        $this->tipo = $tipo;
    }
}

class PagamentoCartao extends Pagamento {
    public string $operadora;
    public string $nro;

    public function __construct($data, $valor, $operadora, $nro) {
        parent::__construct($data, $valor, 'Cartão de Crédito');
        $this->operadora = $operadora;
        $this->nro = $nro;
    }
}

class PagamentoCheque extends Pagamento {
    public string $nro;

    public function __construct($data, $valor, $nro) {
        parent::__construct($data, $valor, 'Cheque');
        $this->nro = $nro;
    }
}