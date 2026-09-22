<?php
class Personagem {
    private $nome;
    private $classe;
    private $vida;
    private $nivel;

    public function __construct($nome, $classe, $vida, $nivel) {
        $this->nome = $nome;
        $this->classe = $classe;
        
        if ($vida < 0 || $vida > 100) {
            echo "<span style='color: red;'>Erro: Valor de vida inválido para {$nome}!</span><br>";
            $this->vida = 100;
        } else {
            $this->vida = $vida;
        }

        if ($nivel < 1) {
            echo "<span style='color: red;'>Erro: Valor de nível inválido para {$nome}!</span><br>";
            $this->nivel = 1;
        } else {
            $this->nivel = $nivel;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function getVida() {
        return $this->vida;
    }

    public function setVida($vida) {
        if ($vida < 0 || $vida > 100) {
            echo "<span style='color: red;'>Erro: A vida do personagem não pode ser menor que 0 ou maior que 100</span><br>";
        } else {
            $this->vida = $vida;
        }
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel) {
        if ($nivel < 1) {
            echo "<span style='color: red;'>Erro: O nível do personagem não pode ser menor que 1</span><br>";
        } else {
            $this->nivel = $nivel;
        }
    }

    public function receberDano($valor) {
        echo "💔 {$this->nome} recebeu {$valor} de dano<br>";
        $novaVida = $this->vida - $valor;
        $this->vida = ($novaVida < 0) ? 0 : $novaVida;
        echo "Vida atual: {$this->vida}<br><br>";
    }

    public function recuperarVida($valor) {
        echo "💖 {$this->nome} recuperou {$valor} de vida<br>";
        $novaVida = $this->vida + $valor;
        $this->vida = ($novaVida > 100) ? 100 : $novaVida;
        echo "Vida atual: {$this->vida}<br><br>";
    }

    public function subirNivel() {
        $this->nivel += 1;
        echo "⭐ {$this->nome} subiu para o nível {$this->nivel}.<br><br>";
    }

    public function atacar() {
        echo "Personagem atacou<br><br>";
    }
}