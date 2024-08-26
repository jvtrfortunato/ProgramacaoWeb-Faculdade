<?php

Class Cinema {
    public $numSala;
    public $nomeFilme;
    public $dataSessao;
    public $horaSessao;
    public $assentosTotais = 120;
    public $assentosOcupados = [];

    public function __construct($numSala, $nomeFilme, $dataSessao, $horaSessao) {
        $this->numSala = $numSala;
        $this->nomeFilme = $nomeFilme;
        $this->dataSessao = $dataSessao;
        $this->horaSessao = $horaSessao;
    }

    public function getProximoAssentoLivre() {
        for ($i = 1; $i <= $this->assentosOcupados; $i++) {
            if (!in_array($i, $this->assentosOcupados)) {
                return $i;
            }
        }
    }

    public function verificaAssento($numAssento) {
        if (in_array($numAssento, $this->assentosOcupados)) {
            return true;
        } else {
            return false;
        }
    }

    public function ocuparAssento($numAssento) {
        if (!in_array($numAssento, $this->assentosOcupados)) {
            $this->assentosOcupados[] = $numAssento;
            return true;
        } else {
            return false;
        }
    }

    public function getAssentosLivres() {
        return $this->assentosTotais - count($this->assentosOcupados);
    }

    public function getFilme() {
        return $this->nomeFilme;
    }

    public function getHorarioSessao() {
        return $this->horaSessao;
    }
}

$s1 = new Cinema(1, 'Dead Pool', '26/08/2024', '21:10');
echo $s1->ocuparAssento(1);
echo "<br>";
echo $s1->ocuparAssento(2);
echo "<br>";
echo $s1->ocuparAssento(5);
echo "<br>";
echo $s1->ocuparAssento(6);
echo "<br>";
echo $s1->ocuparAssento(7);
echo "<br>";
echo $s1->ocuparAssento(8);
echo "<br>";
echo $s1->getProximoAssentoLivre();
echo "<br>";
echo $s1->getAssentosLivres();
echo "<br>";
echo $s1->getFilme();
echo "<br>";
echo $s1->getHorarioSessao();
