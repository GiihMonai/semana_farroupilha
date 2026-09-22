<form method="POST">
    Interesses:<br>
    <input type="checkbox" name="interesses[]" value="HTML"> HTML<br>
    <input type="checkbox" name="interesses[]" value="CSS"> CSS<br>
    <input type="checkbox" name="interesses[]" value="PHP"> PHP<br>
    <input type="checkbox" name="interesses[]" value="JavaScript"> JavaScript<br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['interesses'])) {
        echo "Interesses selecionados: <br>"; 
        foreach ($_POST['interesses'] as $item) {
            echo "• $item <br>"; 
        }
    } else {
        echo "Nenhuma opção foi selecionada. ";
    }
}
?>