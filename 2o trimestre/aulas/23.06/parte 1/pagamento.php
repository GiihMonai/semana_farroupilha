<?php
abstract class Pagamento {
    public string $data;
    public float $valor;

    public function __construct(string $data, float $valor) {
        $this->data = $data;
        $this->valor = $valor;
    }

    abstract public function exibirDetalhes(): string;
}