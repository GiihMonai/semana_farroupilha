<?php

function classificarAluno($pontos) {
    if ($pontos >= 1000) {
        return "Atleta Elite";
    } elseif ($pontos >= 700) {
        return "Avançado";
    } elseif ($pontos >= 400) {
        return "Intermediário";
    } else {
        return "Iniciante";
    }
}

$pontuacoes = [1200, 850, 400, 399, 150];

echo "Relatório de Classificação";

foreach ($pontuacoes as $ponto) {
    $classe = classificarAluno($ponto);
    
    echo " Pontuação: $ponto - Status: $classe";
}

?>