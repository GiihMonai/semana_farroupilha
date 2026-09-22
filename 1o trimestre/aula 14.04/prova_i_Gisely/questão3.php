<?php
session_start();

if (isset($_GET['reset'])) {
    session_destroy(); 
    exit;
}

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Acessos</title>
</head>
<body>

    <h1>Você já viu essa página <?php echo $_SESSION['contador']; ?> vezes</h1>

    <form action="" method="GET">
        <button type="submit" name="reset" value="true">
            Ver memes do zero
        </button>
    </form>

</body>
</html>