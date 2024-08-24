<?php

class Carro {
    //Atributos
    public $consumoCombustivel;
    public $combustivelTanque = 0;

    //Construtor
    public function __construct($consumoCombustivel) {
        $this->consumoCombustivel = $consumoCombustivel;
    }

    //Get Set
    public function getCombustivel() {
        return "Total de combustível no tanque: " . $this->combustivelTanque . " litros.<br>";
    }

    public function setCombustivel($combustivel) {
        $this->combustivelTanque += $combustivel;
        return "Veículo abastecido com $combustivel litros.<br>";
    }

    //Métodos
    public function andar($distanciaKm) {
        $combustivelNecessario = $distanciaKm * $this->consumoCombustivel;
        if($combustivelNecessario <= $this->combustivelTanque) {
            $this->combustivelTanque -= $combustivelNecessario;
            return "Distância da próxima viagem: $distanciaKm km.<br> Você dirigiu $distanciaKm km.<br>";
        } else {
            $distanciaPossivel = $this->combustivelTanque / $this->consumoCombustivel;
            $this->combustivelTanque = 0;
            return "Distância da próxima viagem: $distanciaKm km.<br> Combustível insuficiente! Você dirigiu apenas $distanciaPossivel km antes de parar.<br>";
        }
    }
}

$c1 = new Carro(0.5);
echo "Objeto Carro criado com sucesso!<br>";
echo $c1->getCombustivel() . "<br>";

echo $c1->setCombustivel(40);
echo $c1->getCombustivel() . "<br>";

echo $c1->andar(70);
echo $c1->getCombustivel() . "<br>";

echo $c1->setCombustivel(17);
echo $c1->getCombustivel() . "<br>";

echo $c1->andar(15);
echo $c1->getCombustivel() . "<br>";

echo $c1->andar(40);
echo $c1->getCombustivel() . "<br>";

?>