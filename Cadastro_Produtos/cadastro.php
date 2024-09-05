<?php
// Simulando o conceito de variáveis privadas dentro de um escopo
function cadastrarProduto($nome, $precoCompra, $validade) {
    // Calcula o preço de venda
    $precoVenda = $precoCompra * 1.3;

    // Exibe as informações do produto (poderia ser armazenado em um banco de dados)
    echo "Produto cadastrado com sucesso:<br>";
    echo "Nome: $nome<br>";
    echo "Preço de Compra: R$ $precoCompra<br>";
    echo "Preço de Venda: R$ $precoVenda<br>";
    echo "Validade: $validade";
}

// Recebe os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $precoCompra = $_POST['precoCompra'];
    $validade = $_POST['validade'];

    cadastrarProduto($nome, $precoCompra, $validade);
}