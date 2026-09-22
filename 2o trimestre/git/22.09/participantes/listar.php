<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$pesquisa = $_GET['pesquisa'] ?? '';
$pagamento = $_GET['pagamento'] ?? 'todos';
$presenca = $_GET['presenca'] ?? 'todos';

$sql = "SELECT * FROM participantes WHERE nome LIKE :pesquisa";

$params = [':pesquisa' => '%' . $pesquisa . '%'];
if ($pagamento === 'pagos') {
    $sql .= " AND pago = 1";
}elseif ($pagamento === 'pendentes') {
    $sql .= " AND pago = 0";}
if ($presenca === 'confirmados') {
    $sql .= " AND confirmado = 1";
}elseif ($presenca === 'nao_confirmados') {
    $sql .= " AND confirmado = 0";
}

$sql .= " ORDER BY nome";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$participantes = $stmt->fetchAll(PDO::FETCH_ASSOC);
require_once '../includes/cabecalho.php';
?>
<div class="container-form">
    <h2>Participantes</h2>
    <form method="GET">
    <div class="campo-form">
        <label for="pesquisa">Pesquisar participante:</label>
        <input
            type="text"
            id="pesquisa"
             name="pesquisa"
            value="<?= htmlspecialchars($pesquisa) ?>"
            placeholder="Digite o nome"
        >
     </div>
    <div class="campo-form">
        <label for="pagamento">Pagamento:</label>
        <select name="pagamento" id="pagamento">
            <option value="todos" <?= $pagamento === 'todos' ? 'selected' : '' ?>>
                Todos
            </option>
            <option value="pagos" <?= $pagamento === 'pagos' ? 'selected' : '' ?>>
                Pagos
            </option>
            <option value="pendentes" <?= $pagamento === 'pendentes' ? 'selected' : '' ?>>
                Pendentes
            </option>
        </select>
    </div>
    <div class="campo-form">
        <label for="presenca">Presença:</label>
        <select name="presenca" id="presenca">
            <option value="todos" <?= $presenca === 'todos' ? 'selected' : '' ?>>
                Todos
            </option>
            <option value="confirmados" <?= $presenca === 'confirmados' ? 'selected' : '' ?>>
                Confirmados
            </option>
            <option value="nao_confirmados" <?= $presenca === 'nao_confirmados' ? 'selected' : '' ?>>
                Não confirmados
            </option>
        </select>
    </div>
    <button type="submit" class="btn-submit">
        Pesquisar
    </button>
    </form>
    <br>
    <table border="1" width="100%" cellpadding="10">
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
        <?php foreach ($participantes as $participante): ?>
            <?php
            if ($participante['confirmado'] == 1 && $participante['pago'] == 1) {
                $situacao = 'INSCRIÇÃO REGULARIZADA';
            } elseif ($participante['confirmado'] == 1 && $participante['pago'] == 0) {
                $situacao = 'PAGAMENTO PENDENTE';
            } else {
                $situacao = 'AGUARDANDO CONFIRMAÇÃO';
            }
            ?>
            <tr>
            <td>
                <?= htmlspecialchars($participante['nome']) ?>
            </td>
            <td>
                <?= htmlspecialchars($participante['turma']) ?>
            </td>
            <td>
                <?= htmlspecialchars($participante['tipo_churrasco']) ?>
            </td>
            <td>
                <?= $participante['confirmado'] ? 'Confirmado' : 'Não confirmado' ?>
            </td>
            <td>
                <?= $participante['pago'] ? 'Pago' : 'Pendente' ?>
            </td>
            <td>
                <?= $situacao ?>
            </td>
            <td>
                <a href="editar.php?id=<?= $participante['id'] ?>">
                    Editar
                </a>
                <a href="excluir.php?id=<?= $participante['id'] ?> "onclick="return confirm('Deseja realmente excluir esta inscrição?');">
                    Excluir
                </a>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require_once '../includes/rodape.php'; ?>