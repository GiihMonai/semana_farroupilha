<?php require '../includes/cabecalho.php'; ?>

<h2>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</h2>
<p>O sistema está pronto. Utilize o menu de navegação acima para gerenciar os participantes cadastrados no banco de dados.</p>

<div style="margin-top: 30px; text-align: center;">
    <a href="../participantes/listar.php" class="btn">Acessar Módulo de Participantes</a>
</div>

<?php require '../includes/rodape.php'; ?>