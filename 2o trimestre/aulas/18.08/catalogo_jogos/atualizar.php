<?php
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Jogo</title>
    <!-- Vincula o arquivo CSS de tons frios -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id         = (int)$_POST['id'];
            $titulo     = $conexao->real_escape_string($_POST['titulo']);
            $genero     = $conexao->real_escape_string($_POST['genero']);
            $plataforma = $conexao->real_escape_string($_POST['plataforma']);
            $ano        = (int)$_POST['ano'];
            $nota       = (float)$_POST['nota'];
            $zerado     = (int)$_POST['zerado'];

            $sql = "UPDATE jogos SET 
                    titulo = '$titulo', 
                    genero = '$genero', 
                    plataforma = '$plataforma', 
                    ano = $ano, 
                    nota = $nota, 
                    zerado = $zerado 
                    WHERE id = $id";

            if ($conexao->query($sql)) {
                echo "<p class='alert alert-success'>Jogo atualizado com sucesso!</p>";
            } else {
                echo "<p class='alert alert-danger'>Erro ao atualizar: " . $conexao->error . "</p>";
            }
        }
        ?>

        <a href="listar.php" class="btn">Voltar para a lista de jogos</a>
    </div>
</body>
</html>