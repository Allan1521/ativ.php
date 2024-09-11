<?php
class Prato {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function calcularValorTotal() {
        // Adiciona 10% de gorjeta
        $gorjeta = $this->valor * 0.1;
        return $this->valor + $gorjeta;
    }
}
?>