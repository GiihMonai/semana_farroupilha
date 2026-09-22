<?php

$comentario = " EU AMEI python mas agora estou estudando php ";

$comentarioTratado = strtoupper(trim($comentario));

$comentarioTratado = str_replace("PYTHON", "PHP", $comentarioTratado);

$totalCaracteres = strlen($comentarioTratado);

echo "O comentário tratado:" . $comentarioTratado;

echo "O total de caracteres: " . $totalCaracteres;

?>