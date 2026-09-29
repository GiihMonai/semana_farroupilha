<?php
require_once '../config/conexao.php';

$busca = $_GET['busca'] ?? '';
$filtro_pago = $_GET['pago'] ?? 'todos';
$filtro_presenca = $_GET['confirmado'] ?? 'todos';

$sql = "SELECT * FROM participantes WHERE 1=1";
$params = [];

if (!empty($busca)) {
    $sql .= " AND nome LIKE :busca";
    $params[':busca'] = "%$busca%";
}

if ($filtro_pago !== 'todos') {
    $sql .= " AND pago = :pago";
    $params[':pago'] = ($filtro_pago === 'pago') ? 1 : 0;
}

if ($filtro_presenca !== 'todos') {
    $sql .= " AND confirmado = :confirmado";
    $params[':confirmado'] = ($filtro_presenca === 'confirmado') ? 1 : 0;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$participantes = $stmt->fetchAll(PDO::FETCH_ASSOC);

include '../includes/cabecalho.php';
?>

<h2>Lista de Participantes</h2>

<?php if (isset($_GET['msg']) && $_GET['msg'] === 'sucesso'): ?>
    <div class="alert alert-success">Operação realizada com sucesso!</div>
<?php endif; ?>

<form method="GET" action="listar.php" class="filter-box">
    <input type="text" name="busca" placeholder="Pesquisar por nome..." value="<?= htmlspecialchars($busca); ?>">

    <select name="pago">
        <option value="todos">Todos os Pagamentos</option>
        <option value="pago" <?= $filtro_pago === 'pago' ? 'selected' : ''; ?>>Pagos</option>
        <option value="pendente" <?= $filtro_pago === 'pendente' ? 'selected' : ''; ?>>Pendentes</option>
    </select>

    <select name="confirmado">
        <option value="todos">Todas as Presenças</option>
        <option value="confirmado" <?= $filtro_presenca === 'confirmado' ? 'selected' : ''; ?>>Confirmados</option>
        <option value="nao_confirmado" <?= $filtro_presenca === 'nao_confirmado' ? 'selected' : ''; ?>>Não Confirmados</option>
    </select>

    <button type="submit" class="btn btn-secondary">Filtrar</button>
</form>

<table class="data-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Turma</th>
            <th>Tipo</th>
            <th>Presença</th>
            <th>Pagamento</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($participantes) > 0): ?>
            <?php foreach ($participantes as $p): ?>
                <?php
                if ($p['confirmado'] && $p['pago']) {
                    $situacao = "INSCRIÇÃO REGULARIZADA";
                    $class_sit = "status-ok";
                } elseif ($p['confirmado'] && !$p['pago']) {
                    $situacao = "PAGAMENTO PENDENTE";
                    $class_sit = "status-warning";
                } else {
                    $situacao = "AGUARDANDO CONFIRMAÇÃO";
                    $class_sit = "status-danger";
                }
                ?>
                <tr>
                    <td><?= htmlspecialchars($p['nome']); ?></td>
                    <td><?= htmlspecialchars($p['turma']); ?></td>
                    <td><?= htmlspecialchars($p['tipo_churrasco']); ?></td>
                    <td>
                        <a href="atualizar.php?id=<?= $p['id']; ?>&acao=alternar_presenca" class="btn-link">
                            <?= $p['confirmado'] ? 'Confirmado' : 'Não Confirmado'; ?>
                        </a>
                    </td>
                    <td>
                        <a href="atualizar.php?id=<?= $p['id']; ?>&acao=alternar_pagamento" class="btn-link">
                            <?= $p['pago'] ? 'Pago' : 'Pendente'; ?>
                        </a>
                    </td>
                    <td><span class="badge <?= $class_sit; ?>"><?= $situacao; ?></span></td>
                    <td>
                        <a href="editar.php?id=<?= $p['id']; ?>" class="btn-sm btn-edit">Editar</a>
                        <a href="excluir.php?id=<?= $p['id']; ?>" class="btn-sm btn-delete link-excluir">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="7">Nenhum participante encontrado.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include '../includes/rodape.php'; ?>