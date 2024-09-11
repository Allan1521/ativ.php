<?php
require_once 'Pessoa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Recebe os dados do formulário
$nome = htmlspecialchars($_POST['nome']);
$dataNascimento = intval($_POST['dataNascimento']);
$profissao =htmlspecialchars( $_POST['profissao']);

// Cria um objeto da classe Pessoa
$pessoa = new Pessoa($nome, $dataNascimento, $profissao);

// Exibe as informações da pessoa
$pessoa->exibirInformacoes();
}
?>