<?php
function avaliarDesculpa($texto) {
    $texto = strtolower($texto);

    $temJustificativa = str_contains($texto, "doente") || str_contains($texto, "hospital") || 
                        str_contains($texto, "consulta") || str_contains($texto, "prova") || str_contains($texto, "médico");

    $temMigue = str_contains($texto, "game") || str_contains($texto, "sono") || 
                str_contains($texto, "acordei tarde") || str_contains($texto, "preguiça");

    if ($temJustificativa && $temMigue) {
        return "Suspeita"; 
    }

    if ($temMigue) {
        return "Migué";
    }

    if ($temJustificativa) {
        return "Justificável";
    }

    return "Suspeita";
}

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $motivo = $_POST['motivo'];
    $classificacao = avaliarDesculpa($motivo);
    
    $resultado = "<strong>$nome</strong>, sua justificativa foi classificada como: <strong>$classificacao</strong><br>";
    $resultado .= "<em>Motivo informado: $motivo</em>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detector de Desculpas</title>
</head>
<body>
    <h1>Detector de Desculpas - IFRS</h1>
    
    <form method="POST" action="">
        <label>Nome do Aluno:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Data da Falta:</label><br>
        <input type="date" name="data" required><br><br>

        <label>Disciplina:</label><br>
        <select name="disciplina">
            <option value="Programação Web">Programação Web</option>
            <option value="Banco de Dados">Banco de Dados</option>
            <option value="Redes">Redes</option>
            <option value="Outro">Outro</option>
        </select><br><br>

        <label>Período da Aula:</label><br>
        <input type="radio" name="periodo" value="Manhã" checked> Manhã
        <input type="radio" name="periodo" value="Tarde"> Tarde
        <input type="radio" name="periodo" value="Noite"> Noite<br><br>

        <label>Motivo da Falta:</label><br>
        <textarea name="motivo" rows="4" cols="30" required></textarea><br><br>

        <button type="submit">Analisar Desculpa</button>
    </form>

    <hr>

    <?php if ($resultado): ?>
        <div class="result">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>
</body>
</html>