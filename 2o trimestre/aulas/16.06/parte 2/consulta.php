<?php
class Consulta {
    public string $veterinario;
    public Proprietario $proprietario;
    public Animal $animal;
    public string $data;
    public string $sala;
    public bool $cirurgia;
    public array $medicamentos = [];

    public function __construct($veterinario, Proprietario $proprietario, Animal $animal, $data, $sala, $cirurgia) {
        $this->veterinario = $veterinario;
        $this->proprietario = $proprietario;
        $this->animal = $animal;
        $this->data = $data;
        $this->sala = $sala;
        $this->cirurgia = $cirurgia;
    }

    public function adicionarMedicamento(Medicamento $medicamento) {
        $this->medicamentos[] = $medicamento;
    }
}