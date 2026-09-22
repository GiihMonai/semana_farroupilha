<form method="POST">
    Nome: <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>
<?php
if (isset($_POST['nome'])) echo "Nome: " . $_POST['nome'];

// Qual a principal diferença observada entre GET e POST?
// R: GET envia os dados visíveis na URL, POST envia eles no corpo da requisição
// Em qual deles os dados aparecem na URL? 
// R: no GET
?>