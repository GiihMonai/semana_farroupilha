<?php
class Peca {
    private string $nome;
    private string $codigo;
    private float $valor;

    public function __construct(string $nome, string $codigo, float $valor) {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->valor = $valor;
    }

    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getCodigo(): string { return $this->codigo; }
    public function setCodigo(string $codigo): void { $this->codigo = $codigo; }

    public function getValor(): float { return $this->valor; }
    public function setValor(float $valor): void { $this->valor = $valor; }
}