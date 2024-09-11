<?php
require_once 'Perfil_Aluno.php';
// Recebe os dados do formulário
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$curso = $_POST['curso'];
$disciplina = $_POST['disciplina'];
$notas = [$_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST['nota4']];

// Cria um objeto da classe Aluno
$aluno = new Aluno($nome, $matricula, $curso, $disciplina);

// Adiciona as notas ao aluno
foreach ($notas as $nota) {
    $aluno->adicionarNota($nota);
}

// Exibe as informações do aluno
$aluno->exibirInformacoes();
?>