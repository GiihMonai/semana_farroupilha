<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

include 'conexao.php';

$resTotal = $conexao->query("SELECT COUNT(*) AS total FROM equipamentos");
$total = $resTotal->fetch_assoc()['total'];

$resDisp = $conexao->query("SELECT COUNT(*) AS disp FROM equipamentos WHERE disponivel = 1");
$disponiveis = $resDisp->fetch_assoc()['disp'];

$resIndisp = $conexao->query("SELECT COUNT(*) AS indisp FROM equipamentos WHERE disponivel = 0");
$indisponiveis = $resIndisp->fetch_assoc()['indisp'];

$termo = isset($_GET['busca']) ? $_GET['busca'] : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel - Equipamentos do Laboratório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>EQUIPAMENTOS DO LABORATÓRIO</h1>
    
    <p>Total de equipamentos: <?= $total ?></p>
    <p>Equipamentos disponíveis: <?= $disponiveis ?></p>
    <p>Equipamentos indisponíveis: <?= $indisponiveis ?></p>

    <nav>
        <a href="listar.php">Listar equipamentos</a> | 
        <a href="cadastrar.php">Cadastrar equipamento</a>
    </nav>
    <hr>

    <h2>Pesquisar equipamento</h2>
    <form action="index.php" method="GET">
        <input type="text" name="busca" value="<?= htmlspecialchars($termo) ?>" placeholder="Digite parte do nome...">
        <button type="submit">Pesquisar</button>
    </form>

    <?php if ($termo !== ''): ?>
        <h3>Resultado da Pesquisa:</h3>
        <?php
        $stmt = $conexao->prepare("SELECT nome FROM equipamentos WHERE nome LIKE ?");
        $likeTermo = "%" . $termo . "%";
        $stmt->bind_param("s", $likeTermo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            echo "<ul>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['nome']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum equipamento encontrado.</p>";
        }
        $stmt->close();
        ?>
    <?php endif; ?>
</body>
</html>