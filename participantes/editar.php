<?php
require_once "../config/conexao.php";
require_once "../includes/cabecalho.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: listar.php");
    exit;
}

$sql = "SELECT * FROM participantes WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$participante = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$participante) {
    header("Location: listar.php");
    exit;
}
?>

<h2>Editar Participante</h2>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $participante['id'] ?>">

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($participante['nome']) ?>" required>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($participante['email']) ?>" required>
    </div>

    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?= htmlspecialchars($participante['telefone']) ?>">
    </div>

    <button type="submit" class="btn">Atualizar</button>
    <a href="listar.php">Cancelar</a>
</form>

<?php require_once "../includes/rodape.php"; ?>