function preencheInputs() {
    const listaProdutos = JSON.parse(localStorage.getItem('listaProdutos'));
    const produto = parseInt(localStorage.getItem('produto'));
    if(listaProdutos && produto) {
        const produtoSelecionado = listaProdutos.find((item) => item.id_produto === produto);
        console.log({produtoSelecionado});
        console.log({listaProdutos, produto});

        document.getElementById('inputName').value = produtoSelecionado.nome
        document.getElementById('inputInfo').value = produtoSelecionado.descricao
        document.getElementById('inputPrice').value = produtoSelecionado.preco
        document.getElementById('marca').value = produtoSelecionado.marca
        document.getElementById('categoria').value = produtoSelecionado.categoria
        document.getElementById('estoque').value = produtoSelecionado.estoque

        return true
    }
    return null;
}

preencheInputs();