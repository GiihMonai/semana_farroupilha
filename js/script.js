function confirmarExclusao(id) {
    if (confirm("Tem certeza que deseja excluir este participante? A ação não pode ser desfeita.")) {
        window.location.href = "participantes/excluir.php?id=" + id;
    }
}