<?php
class Consulta {
    public string $veterinario;
    public Animal $animal;
    public string $data;
    public string $sala;
    public bool $cirurgia;
    public array $medicamentos = [];
    public ?Pagamento $pagamento = null;

    public function __construct(string $veterinario, Animal $animal, string $data, string $sala, bool $cirurgia) {
        $this->veterinario = $veterinario;
        $this->animal = $animal;
        $this->data = $data;
        $this->sala = $sala;
        $this->cirurgia = $cirurgia;
    }

    public function adicionarMedicamento(string $nome, string $lote): void {
        $this->medicamentos[] = ['nome' => $nome, 'lote' => $lote];
    }

    public function registrarPagamento(Pagamento $pagamento): void {
        $this->pagamento = $pagamento;
    }
}