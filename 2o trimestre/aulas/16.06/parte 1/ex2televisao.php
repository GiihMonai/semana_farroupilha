<?php
class Televisao {
    private bool $status;
    private int $canal;
    private int $volume;

    public function __construct() {
        $this->status = false; // Inicia como desligada
    }

    public function ligaDesliga(): void {
        if ($this->status === false) {
            $this->status = true;
            $this->canal = 3;   // Sempre inicia no canal 3 ao ligar
            $this->volume = 10; // Sempre inicia no volume 10 ao ligar
        } else {
            $this->status = false;
        }
    }

    public function aumentaCanal(): void {
        if ($this->status === true) {
            $this->canal += 1;
        }
    }

    public function diminuiCanal(): void {
        if ($this->status === true) {
            $this->canal -= 1;
        }
    }

    public function aumentaVolume(): void {
        if ($this->status === true) {
            $this->volume += 1;
        }
    }

    public function diminuiVolume(): void {
        if ($this->status === true) {
            $this->volume -= 1;
        }
    }

    public function mostraCanal(): int {
        return $this->canal;
    }

    public function mostraVolume(): int {
        return $this->volume;
    }
}