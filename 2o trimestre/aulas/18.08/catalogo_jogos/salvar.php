<?php
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo     = $conexao->real_escape_string($_POST['titulo']);
            $genero     = $conexao->real_escape_string($_POST['genero']);
            $plataforma = $conexao->real_escape_string($_POST['plataforma']);
            $ano        = (int)$_POST['ano'];
            $nota       = (float)$_POST['nota'];
            $zerado     = (int)$_POST['zerado'];

            $sql = "INSERT INTO jogos (titulo, genero, plataforma, ano, nota, zerado)
                    VALUES ('$titulo', '$genero', '$plataforma', $ano, $nota, $zerado)";

            if ($conexao->query($sql)) {
                echo "<p class='alert alert-success'>Jogo cadastrado com sucesso!</p>";
            } else {
                echo "<p class='alert alert-danger'>Erro ao cadastrar: " . $conexao->error . "</p>";
            }
        }
        ?>

        <a href="listar.php" class="btn">Voltar para a lista de jogos</a>
    </div>
</body>
</html>