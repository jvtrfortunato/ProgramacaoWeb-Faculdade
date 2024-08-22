<?php

class Data {
    //Atributos
    public $dia;
    public $mes;
    public $ano;

    //Construtores
    public function __construct($dia, $mes, $ano) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    //Conversão do objeto Data para string
    public function __toString() {
        return $this->dia . '/' . $this->mes . '/' . $this->ano;
    }
}

Class Voo {
    //Atributos
    public $numVoo;
    public $data;
    private $assentos = 100;
    private $assentosOcupados = [];

    //Construtor
    public function __construct($numVoo, Data $d3) {
        $this->numVoo = $numVoo;
        $this->data = $d3;
    }

    //Get Set
    public function getProximoAssento () {
        for ($i = 1; $i <= $this->assentos; $i++) {
            if (!in_array($i, $this->assentosOcupados)) {
                return $i . "<br>";
            }
        }
        return "Todos os assentos estão ocupados!";
    }

    public function getVagas() {
        return $this->assentos - count($this->assentosOcupados) . "<br>";
    }

    public function getVoo() {
        return $this->numVoo . "<br>";
    }

    public function getData() {
        return $this->data . "<br>";
    }

    //Métodos
    public function verificaAssento($numeroAssento) {
        if (in_array($numeroAssento, $this->assentosOcupados)) {
            return true;
        }
    }

    public function ocuparAssento($numeroAssento) {
        if ($numeroAssento >= 1 && $numeroAssento <= $this->assentos) {
            if (!in_array($numeroAssento, $this->assentosOcupados)) {
                $this->assentosOcupados[] = $numeroAssento;
                return true . "<br>";
            } else {
                return false . "<br>";
            }
        } else {
            return false . "<br>";
        }
    }
}

$d1 = new Data(16, 1, 2000);
$v1 = new Voo(123, $d1);
echo "Objetos Data e Voo criados com sucesso!<br><br>";

echo "<strong>Ocupação de assentos (retorna 1 se a operação for bem sucedida)</strong><br>";
echo $v1->ocuparAssento(1);
echo $v1->ocuparAssento(200);
echo $v1->ocuparAssento(1);
echo $v1->ocuparAssento(2) . "<br>";

echo "<strong>Busca pelo próximo assento disponível</strong><br>";
echo $v1->getProximoAssento() . "<br>";

echo "<strong>Ocupação de assentos (retorna 1 se a operação for bem sucedida)</strong><br>";
echo $v1->ocuparAssento(67);
echo $v1->ocuparAssento(41);
echo $v1->ocuparAssento(88);
echo $v1->ocuparAssento(3);
echo $v1->ocuparAssento(4);
echo $v1->ocuparAssento(50) . "<br>";

echo "<strong>Busca pelo próximo assento disponível</strong><br>";
echo $v1->getProximoAssento() . "<br>";

echo "<strong>Busca pelo número de assentos vagos</strong><br>";
echo $v1->getVagas() . "<br>";

echo "<strong>Busca pelo número do voo</strong><br>";
echo $v1->getVoo() . "<br>";

echo "<strong>Busca pela data do voo</strong><br>";
echo $v1->getData() . "<br>";

echo "<strong>Verificação de assentos ocupados (retorna 1 se ocupado)</strong><br>";
echo $v1->verificaAssento(3) . "<br>";
echo $v1->verificaAssento(4) . "<br>";
echo $v1->verificaAssento(5) . "<br>";
echo $v1->verificaAssento(22) . "<br>";

?>