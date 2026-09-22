<?php
class Usuario {
    private $login;
    private $senha;

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setSenha($senha) {
        if (strlen($senha) >= 6) {
            $this->senha = $senha;
            echo "Senha alterada com sucesso!<br>";
        } else {
            echo "Senha muito curta!<br>";
        }
    }
}

$user = new Usuario();
$user->setLogin("admin");

echo "Testando senha inválida (123):<br>";
$user->setSenha("123");

echo "<br>Testando senha válida (mudar123):<br>";
$user->setSenha("mudar123");
?>