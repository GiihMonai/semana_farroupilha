<?php
require '../config/conexao.php';
require '../includes/cabecalho.php';

$id = $_GET['id'] ?? null;
if (!$id) { die("ID não fornecido."); }

$stmt = $pdo->prepare("SELECT * FROM participantes WHERE id = ?");
$stmt->execute([$id]);
$p = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$p) { die("Participante não encontrado."); }
?>

<h2>Editar Participante</h2>
<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
    
    <label>Nome Completo:</label>
    <input type="text" name="nome" value="<?php echo htmlspecialchars($p['nome']); ?>" required>
    
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($p['email']); ?>" required>
    
    <label>Telefone:</label>
    <input type="text" name="telefone" value="<?php echo htmlspecialchars($p['telefone']); ?>">
    
    <button type="submit" class="btn">Atualizar Dados</button>
    <a href="listar.php" class="btn" style="background-color: #ddd; color: #333;">Cancelar</a>
</form>

<?php require '../includes/rodape.php'; ?>