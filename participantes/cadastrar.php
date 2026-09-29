<?php 
require_once '../config/conexao.php';
include '../includes/cabecalho.php'; 
?>

<h2>Cadastrar Participante</h2>

<form action="salvar.php" method="POST" id="formCadastro" class="form-box">
    <div class="form-group">
        <label for="nome">Nome Completo *</label>
        <input type="text" id="nome" name="nome">
    </div>

    <div class="form-group">
        <label for="turma">Turma *</label>
        <input type="text" id="turma" name="turma">
    </div>

    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone">
    </div>

    <div class="form-group">
        <label for="tipo_churrasco">Tipo de Churrasco *</label>
        <select id="tipo_churrasco" name="tipo_churrasco">
            <option value="">Selecione...</option>
            <option value="Tradicional">Tradicional</option>
            <option value="Vegetariano">Vegetariano</option>
        </select>
    </div>

    <div class="form-group" id="grupoAcompanhamento">
        <label for="acompanhamento">Acompanhamento</label>
        <select id="acompanhamento" name="acompanhamento">
            <option value="Nenhum">Nenhum</option>
            <option value="Arroz">Arroz</option>
            <option value="Salada">Salada</option>
            <option value="Pão">Pão</option>
            <option value="Maionese">Maionese</option>
        </select>
    </div>

    <div class="form-group">
        <label>Presença Confirmada?</label>
        <select name="confirmado">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

    <div class="form-group">
        <label>Pagamento Realizado?</label>
        <select name="pago">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Inscrição</button>
</form>

<?php include '../includes/rodape.php'; ?>