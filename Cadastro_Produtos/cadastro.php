<?php
// Recebe os dados do formulário
$nome = $_POST['nome'];
$preco_compra = $_POST['preco_compra'];
$validade = $_POST['validade'];

// Calcula o preço de venda
$preco_venda = $preco_compra * 1.3;

// Exibe os dados em tela
echo "<h2>Produto Cadastrado</h2>";
echo "<p>Nome: " . $nome . "</p>";
echo "<p>Preço de Compra: R$" . number_format($preco_compra, 2, ',', '.') . "</p>";
echo "<p>Preço de Venda: R$" . number_format($preco_venda, 2, ',', '.') . "</p>";
echo "<p>Validade: " . $validade . "</p>";
?>