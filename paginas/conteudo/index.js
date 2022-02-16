async function adicionarProduto() {

    const token = localStorage.getItem('token')
    const data = new FormData()

    data.append('nome', document.getElementById('inputName').value)
    data.append('descricao', document.getElementById('inputInfo').value)
    data.append('preco', document.getElementById('inputPrice').value)
    data.append('marca', document.getElementById('marca').value)
    data.append('categoria', document.getElementById('categoria').value)
    data.append('estoque', document.getElementById('estoque').value)
    data.append('file', document.getElementById('inputFile').files[0])

    await fetch('https://projeto-bd2.herokuapp.com/produtos', {
        headers: {
            'Authorization': `Bearer ${token}`,
        },
        method: "POST",
        body: data
    }).then(async (response) => {
        console.log(await response.json())
        alert("Produto adicionado com sucesso!")
        window.location.href = "detalhes_produto.html"
    })
}

async function editarProduto(produto){
    localStorage.setItem("produto", produto)
    window.location.href = "editar_produto.html"
    //redirecionamento pra pagina de produtos com js editar_produto.html
}

async function confirmarEdicao(){

    const token = localStorage.getItem('token')
    const data = new FormData()

    data.append('nome', document.getElementById('inputName').value)
    data.append('descricao', document.getElementById('inputInfo').value)
    data.append('preco', document.getElementById('inputPrice').value)
    data.append('marca', document.getElementById('marca').value)
    data.append('categoria', document.getElementById('categoria').value)
    data.append('estoque', document.getElementById('estoque').value)
    data.append('file', document.getElementById('inputFile').files[0])

    await fetch(`https://projeto-bd2.herokuapp.com/produtos/${localStorage.getItem('produto')}`, {
        headers: {
            'Authorization': `Bearer ${token}`,
        },
        method: "PUT",
        body: data
    }).then(async (response) => {
        console.log(await response.json())
        alert("Produto editado com sucesso!")
        window.location.href = "detalhes_produto.html"
    })

}


async function listarProdutos() {

    const tbody = document.createElement('tbody')
    const table = document.getElementById('listProducts')

    await fetch('https://projeto-bd2.herokuapp.com/produtos', {
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
                        <a class="btn btn-info btn-sm" onclick="editarProduto(${item.id_produto})">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" onclick="deletarProduto(${item.id_produto})">
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
async function deletarProduto(produto){
    const confirmed = confirm('Você deseja deletar o produto?')
    if (confirmed) {
        await fetch(`https://projeto-bd2.herokuapp.com/produtos/${produto}`, {
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('token')}`,
            },
            method: "DELETE",
        }).then(() => {
            alert('Produto deletado com sucesso.')
            window.location.reload()
        })
    }
}
async function login(){
    const email = document.getElementById('inputLogin').value
    const senha = document.getElementById('inputPassword').value
    console.log(email, senha)
    const data = {            email,
        senha,}
    const response = await fetch('https://projeto-bd2.herokuapp.com/login', {
        headers:{'Content-Type': 'application/json',},
        method: "POST",
        body: JSON.stringify(data)
    }).then(async (response) => {
        const data = await response.json()
        console.log(data)
        localStorage.setItem('token', data.token)

        window.location.href = 'detalhes_produto.html'

    })

}

function logout(){
    localStorage.setItem('token','')
    window.location.href = "login.html"
}
listarProdutos()
