<?php
class Reserva {
    private Cliente $cliente;
    private array $ingressos; 
    private float $taxaServico;

    public function __construct(Cliente $cliente, float $taxaServico) {
        $this->cliente = $cliente;
        $this->ingressos = []; 
        $this->setTaxaServico($taxaServico);
    }

    public function adicionarIngresso(Ingresso $ingresso): void {
        $this->ingressos[] = $ingresso;
    }

    public function calcularSubtotal(): float {
        $subtotal = 0.0;
        foreach ($this->ingressos as $ingresso) {
            $subtotal += $ingresso->getValor();
        }
        return $subtotal;
    }

    public function calcularTotal(): float {
        return $this->calcularSubtotal() + $this->taxaServico;
    }

    public function getCliente(): Cliente {return $this->cliente;}

    public function setCliente(Cliente $cliente): void {
        $this->cliente = $cliente;
    }

    public function getTaxaServico(): float {return $this->taxaServico;}

    public function setTaxaServico(float $taxaServico): void {
        if ($taxaServico < 0) {
            throw new Exception("A taxa de serviço deverá ser maior ou igual a zero.");
        }
        $this->taxaServico = $taxaServico;
    }
}