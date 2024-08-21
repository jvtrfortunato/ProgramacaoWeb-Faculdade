<?php

class Calculadora {
    //Atributos
    public $res;
    public $mem;

    //Construtor
    public function __construct() {
        $this->res = 0;
        $this->mem = 0;
    }

    //Get
    public function getRes() {
        return $this->res;
    }

    //Métodos
    public function zerar() {
        $this->mem = $this->res;
        $this->res = 0;
    }

    public function desfaz() {
        $this->res = $this->mem;
    }

    public function soma($valor) {
        $this->mem = $this->res;
        $this->res += $valor;
    }

    public function subtracao($valor) {
        $this->mem = $this->res;
        $this->res -= $valor;
    }

    public function divisao($valor) {
        if ($valor != 0) {
            $this->mem = $this->res;
            $this->res /= $valor;
        } else {
            echo "ERRO: divisão por 0!";
        }
    }

    public function multiplicacao($valor) {
        $this->mem = $this->res;
        $this->res *= $valor;
    }

    public function potencia($valor) {
        if (floor($valor) == $valor) {
            $this->mem = $this->res;
            $this->res **= $valor;  
        } else { 
            return "ERRO: o expoente não é um número inteiro!";
        }
    }

    public function porcentagem($valor) {
        $this->mem = $this->res;
        $this->res = ($this->res * $valor) / 100;  
    }

    public function raizQuadrada() {
        if ($this->res < 0) {
            return "ERRO: número negativo não possui raiz quadrada real";
        } else {
            $this->mem = $this->res;
            $this->res = sqrt($this->res);
        }
    }
}

$c1 = new Calculadora();
$c1->soma(10);
echo $c1->getRes()."<br>";

$c1->subtracao(5);
echo $c1->getRes()."<br>";

$c1->divisao(5);
echo $c1->getRes()."<br>";

$c1->multiplicacao(10);
echo $c1->getRes()."<br>";

$c1->potencia(2);
echo $c1->getRes()."<br>";

$c1->porcentagem(70);
echo $c1->getRes()."<br>";

$c1->raizQuadrada();
echo $c1->getRes()."<br>";

$c1->zerar();
echo $c1->getRes()."<br>";

$c1->desfaz();
echo $c1->getRes()."<br>";

?>