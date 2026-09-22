<?php
class Adulto {
    private float $peso;

    public function engordar(float $quilos): void {
        $this->peso += $quilos;
    }

    public function emagrecer(float $quilos): void {
        $this->peso -= $quilos;
    }
}