<?php
require_once '../config/conexao.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: listar.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM participantes WHERE id = :id");
$stmt->execute([':id' => $id]);
$p = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$p) {
    header('Location: listar.php');
    exit;
}

include '../includes/cabecalho.php';
?>

<h2>Editar Inscrição</h2>

<form action="atualizar.php" method="POST" id="formCadastro" class="form-box">
    <input type="hidden" name="id" value="<?= $p['id']; ?>">
    <input type="hidden" name="acao" value="editar_completo">

    <div class="form-group">
        <label for="nome">Nome Completo *</label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($p['nome']); ?>">
    </div>

    <div class="form-group">
        <label for="turma">Turma *</label>
        <input type="text" id="turma" name="turma" value="<?= htmlspecialchars($p['turma']); ?>">
    </div>

    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($p['telefone']); ?>">
    </div>

    <div class="form-group">
        <label for="tipo_churrasco">Tipo de Churrasco *</label>
        <select id="tipo_churrasco" name="tipo_churrasco">
            <option value="Tradicional" <?= $p['tipo_churrasco'] === 'Tradicional' ? 'selected' : ''; ?>>Tradicional</option>
            <option value="Vegetariano" <?= $p['tipo_churrasco'] === 'Vegetariano' ? 'selected' : ''; ?>>Vegetariano</option>
        </select>
    </div>

    <div class="form-group">
        <label for="acompanhamento">Acompanhamento</label>
        <select id="acompanhamento" name="acompanhamento">
            <option value="Nenhum" <?= $p['acompanhamento'] === 'Nenhum' ? 'selected' : ''; ?>>Nenhum</option>
            <option value="Arroz" <?= $p['acompanhamento'] === 'Arroz' ? 'selected' : ''; ?>>Arroz</option>
            <option value="Salada" <?= $p['acompanhamento'] === 'Salada' ? 'selected' : ''; ?>>Salada</option>
            <option value="Pão" <?= $p['acompanhamento'] === 'Pão' ? 'selected' : ''; ?>>Pão</option>
            <option value="Maionese" <?= $p['acompanhamento'] === 'Maionese' ? 'selected' : ''; ?>>Maionese</option>
        </select>
    </div>

    <div class="form-group">
        <label>Presença Confirmada?</label>
        <select name="confirmado">
            <option value="0" <?= !$p['confirmado'] ? 'selected' : ''; ?>>Não</option>
            <option value="1" <?= $p['confirmado'] ? 'selected' : ''; ?>>Sim</option>
        </select>
    </div>

    <div class="form-group">
        <label>Pagamento Realizado?</label>
        <select name="pago">
            <option value="0" <?= !$p['pago'] ? 'selected' : ''; ?>>Não</option>
            <option value="1" <?= $p['pago'] ? 'selected' : ''; ?>>Sim</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Dados</button>
</form>

<?php include '../includes/rodape.php'; ?>