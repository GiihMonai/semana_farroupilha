<?php
require_once "../config/conexao.php";
require_once "../includes/cabecalho.php";

$sql = "SELECT * FROM participantes ORDER BY id DESC";
$stmt = $pdo->query($sql);
$participantes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de Participantes</h2>
<a href="cadastrar.php" class="btn btn-primary">Cadastrar Novo</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($participantes) > 0): ?>
            <?php foreach ($participantes as $p): ?>
                <tr>
                    <td><?= htmlspecialchars($p['id']) ?></td>
                    <td><?= htmlspecialchars($p['nome']) ?></td>
                    <td><?= htmlspecialchars($p['email']) ?></td>
                    <td><?= htmlspecialchars($p['telefone']) ?></td>
                    <td>
                        <a href="editar.php?id=<?= $p['id'] ?>">Editar</a> | 
                        <a href="excluir.php?id=<?= $p['id'] ?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Nenhum participante encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php require_once "../includes/rodape.php"; ?>