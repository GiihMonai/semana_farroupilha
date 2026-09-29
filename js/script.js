document.addEventListener('DOMContentLoaded', () => {

    const formCadastro = document.getElementById('formCadastro');
    if (formCadastro) {
        formCadastro.addEventListener('submit', (e) => {
            const nome = document.getElementById('nome').value.trim();
            const turma = document.getElementById('turma').value.trim();
            const tipo = document.getElementById('tipo_churrasco').value;

            if (!nome || !turma || !tipo) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios (Nome, Turma e Tipo de Churrasco).');
            }
        });
    }

    const linksExcluir = document.querySelectorAll('.link-excluir');
    linksExcluir.forEach(link => {
        link.addEventListener('click', (e) => {
            const confirmacao = confirm('Deseja realmente excluir esta inscrição?');
            if (!confirmacao) {
                e.preventDefault();
            }
        });
    });

    const selectTipo = document.getElementById('tipo_churrasco');
    const grupoAcompanhamento = document.getElementById('grupoAcompanhamento');

    if (selectTipo && grupoAcompanhamento) {
        const toggleAcompanhamento = () => {
            if (selectTipo.value === 'Vegetariano') {
                grupoAcompanhamento.style.display = 'block';
            } else {
                grupoAcompanhamento.style.display = 'block';
            }
        };

        selectTipo.addEventListener('change', toggleAcompanhamento);
    }
});