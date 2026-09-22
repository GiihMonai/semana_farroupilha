<?php
class Pessoa {
    private string $sexo;
    private int $idade;

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }

    public function oQueEh(): string {
        if ($this->sexo === 'Feminino') {
            if ($this->idade < 18) {
                return 'Você é uma menina!';
            } else {
                return 'Você é uma mulher!';
            }
        } else {
            if ($this->idade < 18) {
                return 'Você é um menino!';
            } else {
                return 'Você é um homem!';
            }
        }
    }
}

if (isset($_POST['enviar'])) {
    $pessoa = new Pessoa();
    $pessoa->setSexo($_POST['sexo']);
    $pessoa->setIdade((int)$_POST['idade']);
    $resultado = $pessoa->oQueEh();
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p><?php echo $resultado; ?></p>
        <br>
        <a href="ex6.php">Retornar</a>
    </body>
    </html>
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="ex6.php" method="post">
            <p>Informe seu sexo:</p>
            <label><input type="radio" name="sexo" value="Masculino">Masculino</label>
            <label><input type="radio" name="sexo" value="Feminino" checked>Feminino</label>
            <br><br>
            <label>Informe sua idade: <input type="text" name="idade" value="8"></label>
            <br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
    </html>
    <?php
}
?>