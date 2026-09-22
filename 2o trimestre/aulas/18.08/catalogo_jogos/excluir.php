<?php
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        if ($id > 0) {
            $sql = "DELETE FROM jogos WHERE id = $id";

            if ($conexao->query($sql)) {
                echo "<p class='alert alert-success'>Jogo excluído com sucesso!</p>";
            } else {
                echo "<p class='alert alert-danger'>Erro ao excluir: " . $conexao->error . "</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>ID inválido para exclusão.</p>";
        }
        ?>

        <a href="listar.php" class="btn">Voltar para a lista de jogos</a>
    </div>
</body>
</html>