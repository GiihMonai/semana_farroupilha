<?php
function calcularMediaTreino($t1, $t2, $t3) {
    return ($t1 + $t2 + $t3) / 3;
}

$relatorio = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $t1 = $_POST['t1'] ?? '';
    $t2 = $_POST['t2'] ?? '';
    $t3 = $_POST['t3'] ?? '';

    if (!empty($nome) && is_numeric($t1) && is_numeric($t2) && is_numeric($t3)) {
        
        $media = calcularMediaTreino($t1, $t2, $t3);
        
        if ($media >= 7) {
            $resultado = "Bom desempenho";
        } elseif ($media >= 5) {
            $resultado = "Em evolução";
        } else {
            $resultado = "Baixo desempenho";
        }

        $relatorio = "
            <hr>
            <h3>Resultado para: $nome</h3>
            <p><strong>Média Calculada:</strong> " . number_format($media, 1) . "</p>
            <p><strong>Status Final:</strong> $resultado</p>
        ";
    } else {
        $relatorio = "<p>Por favor, preencha todos os campos corretamente!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Avaliação de Treino</title>
</head>
<body>

    <h2>Cadastro de Treinos</h2>
    <form method="POST" action="">
        <label>Nome do Aluno:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Treino 1:</label><br>
        <input type="number" step="0.1" name="t1" required><br><br>

        <label>Treino 2:</label><br>
        <input type="number" step="0.1" name="t2" required><br><br>

        <label>Treino 3:</label><br>
        <input type="number" step="0.1" name="t3" required><br><br>

        <button type="submit">Enviar Avaliação</button>
    </form>

    <?php echo $relatorio; ?>

</body>
</html>