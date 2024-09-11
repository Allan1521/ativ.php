<?php
require_once 'Calcular.php';

// Recebe o valor do prato do formulário
$valorPrato = $_POST['valorPrato'];

// Cria um objeto da classe Prato
$prato = new Prato($valorPrato);

// Calcula o valor total e exibe na tela
$valorTotal = $prato->calcularValorTotal();
echo "<h2>Valor Total a Pagar: R$ " . number_format($valorTotal, 2, ',', '.') . "</h2>";
?>