<?php
class Funcionario {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function trabalhar() { 
        return "trabaio";
    }
}

class Programador extends Funcionario {
    public function trabalhar() { 
        return "garoto/a de programa {$this->nome} ta programando";
    }
}

class Designer extends Funcionario { 
    public function trabalhar() {
        return "desenhador {$this->nome} ta desenhando"; 
    }
}

$dev = new Programador("Ely");
$design = new Designer("Cachinhos");

echo $dev->trabalhar() . "<br>";
echo $design->trabalhar() . "<br>";
?>