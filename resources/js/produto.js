const radiosCor = document.querySelectorAll('input[name="cor"]');

radiosCor.forEach(radio => {
    radio.addEventListener('change', (e) => {
        atualizarVariacao();
    });
});


const radiosTamanho = document.querySelectorAll('input[name="tamanho"]');

radiosTamanho.forEach(radio => {
    radio.addEventListener('change', (e) => {
        atualizarVariacao();
    });
});


function atualizarVariacao() {
    const cor = Number(document.querySelector('input[name="cor"]:checked').value)
    const tamanho = Number(document.querySelector('input[name="tamanho"]:checked').value)

    const variacao = variacoes.find(v => v.tamanho_id === tamanho && v.cor_id === cor);
    document.getElementById('produto_id').value = variacao.id

    document.querySelectorAll('ul.produto-meta li')[1].innerHTML = `<strong>Estoque:</strong> ${variacao.estoque > 0 ? variacao.estoque : esgotado}`;
    // da tambem pra fazer a mudanca da imagem
}

atualizarVariacao();