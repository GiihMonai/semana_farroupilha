<?php
class Medicamento {
    public string $nome;
    public string $lote;

    public function __construct($nome, $lote) {
        $this->nome = $nome;
        $this->lote = $lote;
    }
}