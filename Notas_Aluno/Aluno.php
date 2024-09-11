<?php
    class Aluno{ /* Crie a classe Aluno */
         private $nota1;/* Os atributos desta classe que são as variáveis */
         private $nota2;
         private $nota3;
         private $nota4;
        

    public function __construct($nota1, $nota2, $nota3, $nota4){/* Crie  função c/o método construtor para inicializar as notas */
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }
    public function calcularMedia(){/* função p/fazer o cálculo das 4 notas e dividir por 4 */
        $media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
        return $media;
    }
}

$aluno1 = new Aluno(8, 7, 9, 6); /* Criando um objeto da classe Aluno */

$mediaAluno1 = $aluno1->calcularMedia(); /* Calculando e exibindo a média */
echo "A média do aluno é: " . $mediaAluno1; 


?>
