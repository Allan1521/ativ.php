<?php 
class Pessoa {
    private $nome;
    private $dataNascimento;
    private $profissao;

    public function __construct($nome, $dataNascimento, $profissao) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->profissao = $profissao;
    }

    public function calcularIdade() {
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($this->dataNascimento);
        $intervalo = $dataAtual->diff($dataNascimento);
        return $intervalo->y;
    }

    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->calcularIdade() . " anos<br>";
        echo "Profissão: " . $this->profissao;
    }
}
?>