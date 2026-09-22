<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$id = $_GET['id'] ?? 0;

$stmt = $pdo->prepare("SELECT * FROM participantes WHERE id = :id");
$stmt->execute([':id' => $id]);

$participante = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$participante) {
    die('Participante não encontrado.');
}
require_once '../includes/cabecalho.php';
?>
<div class="container-form">
    <h2>Editar Participante</h2>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $participante['id'] ?>">
        <div class="campo-form">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($participante['nome']) ?>" required>
        </div>
        <div class="campo-form">
            <label for="turma">Turma:</label>
            <input type="text" id="turma" name="turma" value="<?= htmlspecialchars($participante['turma']) ?>" required>
        </div>
        <div class="campo-form">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($participante['telefone']) ?>">
        </div>
        <div class="campo-form">
            <label for="tipo_churrasco">Tipo de Churrasco:</label>
            <select name="tipo_churrasco" id="tipo_churrasco" required>
                <option value="Tradicional" <?= $participante['tipo_churrasco'] === 'Tradicional' ? 'selected' : '' ?>>
                    Tradicional
                </option>
                <option value="Vegetariano" <?= $participante['tipo_churrasco'] === 'Vegetariano' ? 'selected' : '' ?>>
                    Vegetariano
                </option>
            </select>
        </div>
        <div class="campo-form">
            <label for="acompanhamento">Acompanhamento:</label>
            <input type="text" id="acompanhamento" name="acompanhamento" value="<?= htmlspecialchars($participante['acompanhamento']) ?>">
        </div>
        <div class="campo-form">
            <label>Presença:</label>
            <label>
            <input type="radio" name="confirmado" value="1" <?= $participante['confirmado'] == 1 ? 'checked' : '' ?>>
                Confirmado
            </label>
            <label>
            <input type="radio" name="confirmado" value="0" <?= $participante['confirmado'] == 0 ? 'checked' : '' ?>>
                Não confirmado
            </label>
        </div>
        <div class="campo-form">
            <label>Pagamento:</label>
            <label>
                <input type="radio" name="pago" value="1" <?= $participante['pago'] == 1 ? 'checked' : '' ?>>
                Pago
            </label>
            <label>
                <input type="radio" name="pago" value="0" <?= $participante['pago'] == 0 ? 'checked' : '' ?>>
                Pendente
            </label>
        </div>
        <button type="submit" class="btn-submit">
            Atualizar
        </button>
    </form>
</div>
<?php require_once '../includes/rodape.php'; ?>