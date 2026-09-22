document.addEventListener('DOMContentLoaded', function () {
    const formCadastro = document.getElementById('formCadastro');

    if (formCadastro) {
        formCadastro.addEventListener('submit', function (e) {
            const nome = document.getElementById('nome').value.trim();
            const turma = document.getElementById('turma').value.trim();
            const tipoChurrasco = document.getElementById('tipo_churrasco').value;
            const telefone = document.getElementById('telefone').value.trim();

            let erros = [];

            // Validações obrigatórias (Exercício 7)
            if (nome === '') {
                erros.push('O campo Nome é obrigatório.');
            }

            if (turma === '') {
                erros.push('O campo Turma é obrigatório.');
            }

            if (tipoChurrasco === '') {
                erros.push('Escolha um Tipo de Churrasco.');
            }

            // Dado adicional escolhido para verificação (Exercício 7)
            if (telefone !== '' && telefone.length < 8) {
                erros.push('Se preenchido, o telefone deve ter no mínimo 8 dígitos.');
            }

            if (erros.length > 0) {
                e.preventDefault();
                alert(erros.join('\n'));
            }
        });
    }
});