<?php
class Voo {
    private string $codigo;
    private string $origem;
    private string $destino;

    public function getCodigo(): string {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): void {
        $this->codigo = $codigo;
    }

    public function getOrigem(): string {
        return $this->origem;
    }

    public function setOrigem(string $origem): void {
        $this->origem = $origem;
    }

    public function getDestino(): string {
        return $this->destino;
    }

    public function setDestino(string $destino): void {
        $this->destino = $destino;
    }
}