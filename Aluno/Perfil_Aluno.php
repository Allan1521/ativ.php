<?php
class Aluno {
    private $nome;
    private $matricula;
    private $curso;
    private $disciplina;
    private $notas = [];

    public function __construct($nome, $matricula, $curso, $disciplina) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
        $this->disciplina = $disciplina;
    }

    public function adicionarNota($nota) {
        $this->notas[] = $nota;
    }

    public function calcularMedia() {
        return array_sum($this->notas) / count($this->notas);
    }

    public function estaAprovado() {
        return $this->calcularMedia() >= 7;
    }

    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Curso: " . $this->curso . "<br>";
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Média: " . $this->calcularMedia() . "<br>";
        echo "Situação: " . ($this->estaAprovado() ? "Aprovado" : "Reprovado");
    }
}
?>