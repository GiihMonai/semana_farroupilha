<?php require '../includes/cabecalho.php'; ?>

<h2>Cadastrar Participante</h2>
<form action="salvar.php" method="POST">
    <label>Nome Completo:</label>
    <input type="text" name="nome" required>
    
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Telefone:</label>
    <input type="text" name="telefone" placeholder="(00) 00000-0000">
    
    <button type="submit" class="btn">Salvar Cadastro</button>
    <a href="listar.php" class="btn" style="background-color: #ddd; color: #333;">Cancelar</a>
</form>

<?php require '../includes/rodape.php'; ?>