<?php

class Retangulo {
    //Atributos
    public $largura;
    public $altura;

    //Construtor
    public function __construct() {
        $this->largura = 1;
        $this->altura = 1;
    }

    //Get e Set
    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setLargura($largura) {
        if ($largura > 0)
            $this->largura = $largura;
        else echo "ERRO: valor inválido para a largura!";
    }

    public function setAltura($altura) {
        if ($altura > 0)
            $this->altura = $altura;
        else echo "ERRO: valor inválido para a altura!";
    }

    //Métodos
    public function calcularPerimetro() {
        $perimetro = (2 * $this->largura) + (2 * $this->altura);
        return $perimetro;
    }

    public function calcularArea() {
        $area = $this->largura * $this->altura;
        return $area;
    }

    public function ehQuadrado() {
        if ($this->largura == $this->altura)
            echo "É quadrado!";
        else echo "É retângulo!";
    }
}

$r1 = new Retangulo();
$r1->setLargura(15);
echo $r1->setAltura(-4)."<br>";
$r1->setAltura(7);
echo $r1->calcularPerimetro()."<br>";
echo $r1->calcularArea()."<br>";
echo $r1->ehQuadrado()."<br>";

?>