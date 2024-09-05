<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o valor do prato
    $valorPrato = $_POST['valorPrato'];

    // Calcula a gorjeta (10%)
    $gorjeta = $valorPrato * 0.1;

    // Calcula o valor total
    $valorTotal = $valorPrato + $gorjeta;

    // Retorna o resultado em formato JSON para ser utilizado pelo JavaScript
    echo json_encode(['valorTotal' => $valorTotal]);
}