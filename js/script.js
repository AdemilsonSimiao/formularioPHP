const tbody = document.querySelector("tbody");

const listarTabela = async () => {
    const dados = await fetch("./list.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}
listarTabela()