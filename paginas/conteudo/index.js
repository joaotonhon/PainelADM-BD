async function adicionarProduto() {
    const nome = document.getElementById('inputName').value
    const descricao = document.getElementById('inputInfo').value
    const preco = document.getElementById('inputPrice').value
    const marca = document.getElementById('marca').value
    const categoria = document.getElementById('categoria').value
    const estoque = document.getElementById('estoque').value
    const aux = document.getElementById('inputFile').value
    const arquivo = aux.split('\\').pop().split('/').pop()
    const token = localStorage.getItem('token')
    const response = await fetch('https://projeto-bd2.herokuapp.com/produtos', {
        headers: {
            'Authorization': `Bearer ${token}`
        },
        method: "POST",
        body: {
            //usuário preencheu no forms
            nome,
            descricao,
            preco,
            marca,
            categoria,
            estoque,
        }
    })
    console.log(response)
}

async function editarProduto(produto){
    localStorage.setItem("produto", produto)
    window.location.href = "editar_produto.html"
    //redirecionamento pra pagina de produtos com js editar_produto.html
}

async function listarProdutos() {

    const tbody = document.createElement('tbody')
    const table = document.getElementById('listProducts')

    const response = await fetch('https://projeto-bd2.herokuapp.com/produtos', {
        method: "GET",
    }).then(async (response) => {
        const responseJson = await response.json();
        localStorage.setItem('listaProdutos', JSON.stringify(responseJson))
        for (item of responseJson) {
            tbody.innerHTML +=
                ` <tr>
                    <td>
                        ${item.id_produto}
                    </td>
                    <td>
                        <a>
                        ${item.nome}
                        </a>
                        <br/>
                    </td>
                    <td class="project-state" style="text-align: left;">
                        <span class="badge badge-success">${item.Marca.marca}</span>
                    </td>
                    <td>
                        <span id="categoria">${item.Categoria.nome}</span>
                    </td>
                    <td>
                        <span id="preco">R$${item.preco}</span>
                    </td>
                    <td>
                      <span id="estoque">${item.estoque}</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" onclick="editarProduto(${item.id_produto});">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Deletar
                        </a>
                    </td>
                </tr>`;
                table.appendChild(tbody)
        }
    })
}
async function login(){
    const email = document.getElementById('inputLogin').value
    const senha = document.getElementById('inputPassword').value
    const response = await fetch('https://projeto-bd2.herokuapp.com/login', {
        method: "POST",
        body: {
            email,
            senha,
        }
    }).then(async (response) => {
        const data = response.json()
        localStorage.setItem('token', data.token)
    })

}
listarProdutos()
