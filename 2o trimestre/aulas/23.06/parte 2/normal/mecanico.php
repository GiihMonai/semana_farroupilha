<?php
require_once 'pessoa.php';

class Mecanico extends Pessoa {
    private string $registroProfissional; 
    private string $especialidade; 

    public function __construct(string $nome, string $telefone, string $email, string $registroProfissional, string $especialidade) {
        parent::__construct($nome, $telefone, $email); 
        $this->registroProfissional = $registroProfissional;
        $this->especialidade = $especialidade;
    }

    public function getRegistroProfissional(): string { return $this->registroProfissional; }
    public function setRegistroProfissional(string $registroProfissional): void { $this->registroProfissional = $registroProfissional; }

    public function getEspecialidade(): string { return $this->especialidade; }
    public function setEspecialidade(string $especialidade): void { $this->especialidade = $especialidade; }
}