<?php
class Retangulo {
    private float $ladoMaior;
    private float $ladoMenor;

    public function setLadoMaior(float $maior): void {
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor(float $menor): void {
        $this->ladoMenor = $menor;
    }

    public function calculaArea(): float {
        return $this->ladoMaior * $this->ladoMenor;
    }
}

if (isset($_POST['calcula'])) {
    $retangulo = new Retangulo();
    $retangulo->setLadoMaior((float)$_POST['largura']);
    $retangulo->setLadoMenor((float)$_POST['altura']);
    $area = $retangulo->calculaArea();
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>retangulo.php</title>
    </head>
    <body>
        <h1>Retângulo</h1>
        <p>A área é: <?php echo $area; ?></p>
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
        <h1>Retângulo</h1>
        <form action="ex5.php" method="post">
            <label>Informe a largura: <input type="text" name="largura"></label><br><br>
            <label>Informe a altura: <input type="text" name="altura"></label><br><br>
            <input type="submit" name="calcula" value="Calcular Área">
        </form>
    </body>
    </html>
    <?php   
}
