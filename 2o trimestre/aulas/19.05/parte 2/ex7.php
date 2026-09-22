<?php
class Produto {
    private $nome;
    private $preco;

    public function setNome($nome) {
        if (!empty(trim($nome))) {
            $this->nome = $nome;
        } else {
            echo "Erro: O nome não pode ser vazio!<br>";
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPreco($preco) {
        if ($preco > 0) {
            $this->preco = $preco;
        } else {
            echo "Erro: O preço deve ser maior que zero!<br>";
        }
    }

    public function getPreco() {
        return $this->preco;
    }
}

$prod = new Produto();

echo "Testando valores válidos:<br>";
$prod->setNome("Fone");
$prod->setPreco(150.45);
echo "Produto: " . $prod->getNome() . " - R$ " . $prod->getPreco() . "<br><br>";

echo "Testando valores inválidos:<br>";
$prod->setNome("");
$prod->setPreco(-5.00);
?>