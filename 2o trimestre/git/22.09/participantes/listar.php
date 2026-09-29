<?php
require '../config/conexao.php';
require '../includes/cabecalho.php';

$stmt = $pdo->query("SELECT * FROM participantes ORDER BY id DESC");
$participantes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de Participantes</h2>
<a href="cadastrar.php" class="btn">Cadastrar Novo Participante</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($participantes) > 0): ?>
            <?php foreach ($participantes as $p): ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo htmlspecialchars($p['nome']); ?></td>
                <td><?php echo htmlspecialchars($p['email']); ?></td>
                <td><?php echo htmlspecialchars($p['telefone']); ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $p['id']; ?>" class="btn">Editar</a>
                    <button onclick="confirmarExclusao(<?php echo $p['id']; ?>)" class="btn btn-danger">Excluir</button>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Nenhum participante cadastrado.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php require '../includes/rodape.php'; ?>