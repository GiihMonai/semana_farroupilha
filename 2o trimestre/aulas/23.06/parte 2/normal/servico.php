<?php
require_once 'cliente.php';
require_once 'veiculo.php';
require_once 'mecanico.php';
require_once 'peca.php';

class Servico {
    private string $descricao; 
    private string $data; 
    private float $valorMaoDeObra; 
    private Cliente $cliente; 
    private Veiculo $veiculo; 
    private Mecanico $mecanico; 
    private array $pecas = []; 

    public function __construct(string $descricao, string $data, float $valorMaoDeObra, Cliente $cliente, Veiculo $veiculo, Mecanico $mecanico) {
        $this->descricao = $descricao;
        $this->data = $data;
        $this->valorMaoDeObra = $valorMaoDeObra;
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->mecanico = $mecanico;
    }

    public function adicionarPeca(Peca $peca): void {
        $this->pecas[] = $peca;
    }

    public function calcularTotal(): float {
        $totalPecas = 0;
        foreach ($this->pecas as $peca) {
            $totalPecas += $peca->getValor();
        }
        return $this->valorMaoDeObra + $totalPecas;
    }

    public function getDescricao(): string { return $this->descricao; }
    public function getData(): string { return $this->data; }
    public function getValorMaoDeObra(): float { return $this->valorMaoDeObra; }
    public function getCliente(): Cliente { return $this->cliente; }
    public function getVeiculo(): Veiculo { return $this->veiculo; }
    public function getMecanico(): Mecanico { return $this->mecanico; }
    public function getPecas(): array { return $this->pecas; }
}