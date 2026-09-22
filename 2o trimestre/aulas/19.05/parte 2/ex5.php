<?php
class PessoaValida {
    private $idade;

    public function setIdade($idade) {
        if ($idade > 0 && $idade < 120) {
            $this->idade = $idade;
        } else {
            echo "Idade inválida!<br>";
        }
    }

    public function getIdade() {
        return $this->idade;
    }
}

$p = new PessoaValida();

echo "Testando idade válida (25):<br>";
$p->setIdade(25);
echo "Idade gravada: " . $p->getIdade() . "<br><br>";

echo "Testando idade inválida (150):<br>";
$p->setIdade(150);
?>