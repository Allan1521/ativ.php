<?php
    class Notas{ /* Crie a classe Notas */
         private $nota1;/* Os atributos desta classe que são as variáveis */
         private $nota2;
         private $nota3;
         private $nota4;
         public $media;

    public function __construct($nota1, $nota2, $nota3,$nota4){/* Crie  função c/o método construtor  */
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }
    public function getmedia(){/* função p/fazer o cálculo das 4 notas e dividir por 4 */
        $media=($nota1+$nota2+$nota3+$nota4)/ 4;
        return  $this->$media;
    }
}
?>
