<?php

Class Estacionamento {
    public $nome;
    public $endereco;
    public $numVagasTotais;
    public $vagasOcupadas = [];

    public function __construct($nome, $endereco, $numVagasTotais) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->numVagasTotais = $numVagasTotais;
    }

    public function estacionarVeiculo($numVaga) {
        if ($numVaga >= 1 && $numVaga <= $this->numVagasTotais) {
            if(!in_array($numVaga, $this->vagasOcupadas)) {
                $this->vagasOcupadas[] = $numVaga;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function liberarVaga($numVaga) {
        if ($numVaga >= 1 && $numVaga <= $this->numVagasTotais) {
            $key = array_search($numVaga, $this->vagasOcupadas);
            if($key !== false) {
                unset($this->vagasOcupadas[$key]);
                $this->vagasOcupadas = array_values($this->vagasOcupadas);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getVagasDisponiveis() {
        return $this->numVagasTotais - count($this->vagasOcupadas);
    }

    public function getNomeEstacionamento() {
        return $this->nome;
    }

    public function getEnderecoEstacionamento() {
        return $this->endereco;
    }
}

$e1 = new Estacionamento("São Lucas", 'Rua das Flores, 31', '38');
echo $e1->estacionarVeiculo(22);
echo "<br>";
echo $e1->estacionarVeiculo(16);
echo "<br>";
echo $e1->estacionarVeiculo(9);
echo "<hr>";

echo $e1->vagasOcupadas[0];
echo "<br>";
echo $e1->vagasOcupadas[1];
echo "<br>";
echo $e1->vagasOcupadas[2];
echo "<hr>";

echo $e1->liberarVaga(16);
echo "<hr>";

echo $e1->vagasOcupadas[0];
echo "<br>";
echo $e1->vagasOcupadas[1];
echo "<hr>";

echo $e1->getVagasDisponiveis();
echo "<hr>";
echo $e1->getNomeEstacionamento();
echo "<hr>";
echo $e1->getEnderecoEstacionamento();