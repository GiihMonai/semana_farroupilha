<form method="POST">
    Estado:
    <select name="estado">
        <option value="">Selecione...</option> 
        <option value="Rio Grande do Sul">Rio Grande do Sul</option> 
        <option value="Santa Catarina">Santa Catarina</option> 
        <option value="Paraná">Paraná</option> 
    </select>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['estado'])) {
        echo "Estado selecionado: " . $_POST['estado'];
    } else {
        echo "Selecione um estado antes de enviar.";
    }
}
?>