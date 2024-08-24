<?php

class Data {
    //Atributos
    public $dia;
    public $mes;
    public $ano;

    //Construtores
    public function __construct($dia = 0, $mes = 0, $ano = 0) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function __toString() {
        return $this->dia . '/' . $this->mes . '/' . $this->ano;
    }

    //Gets e Sets
    public function getDia() {
        return $this->dia;
    }

    public function getMes() {
        return $this->mes;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setDia($novoDia) {
        if ($novoDia >= 1 && $novoDia <= 31) {
            $this->dia = $novoDia;
        } else {
            return "ERRO: valor inválido!";
        }
    }

    public function setMes($novoMes) {
        if ($novoMes >= 1 && $novoMes <= 12) {
            $this->mes = $novoMes;
        } else {
            return "ERRO: valor inválido!";
        }
    }

    public function setAno($novoAno) {
        if ($novoAno >= 1 && $novoAno <= 2024) {
            $this->ano = $novoAno;
        } else {
            return "ERRO: valor inválido!";
        }
    }

    public function incrementarDia() {
        $this->dia++;

        if ($this->dia > $this->diasNoMes()) {
            $this->dia = 1;
            $this->mes++;

            if ($this->mes > 12) {
                $this->mes = 1;
                $this->ano++;
            }
        }
    }

    public function decrementarDia() {
        $this->dia--;

        if ($this->dia <1) {
            $this->mes--;

            if ($this->mes < 1) {
                $this->mes = 12;
                $this->ano--;
            }

            $this->dia = $this->diasNoMes();
        }
    }

    private function diasNoMes() {
        $diasPorMes = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        if ($this->mes == 2 && $this->anoBissexto()) {
            return 29;
        }

        return $diasPorMes[$this->mes - 1];
    }

    private function anoBissexto() {
        return ($this->ano % 4 == 0 && $this->ano % 100 != 0) || ($this->ano % 400 == 0);
    }

    public function retornarData() {
        $diaFormatado = str_pad($this->dia, 2, '0', STR_PAD_LEFT);
        $mesFormatado = str_pad($this->mes, 2, '0', STR_PAD_LEFT);
        return "$diaFormatado/$mesFormatado/$this->ano";
    }

    public function ehAnoBissexto() {
        if (($this->ano % 4 == 0 && $this->ano % 100 != 0) || ($this->ano % 400 == 0)) {
            return "$this->ano é um ano bissexto!";
        } else {
            return "$this->ano não é um ano bissexto!";
        }
    }

    public function subtrairData($dia, $mes, $ano) {
        $dataAtual = new DateTime("$this->ano-$this->mes-$this->dia");

        $dataComparacao = new DateTime("{$ano}-{$mes}-{$dia}");

        $diferenca = $dataAtual->diff($dataComparacao);

        return $diferenca->days;
    }

    public function compararDatas($dia, $mes, $ano) {
        if ($this->ano > $ano) {
            return 1;
        } elseif ($this->ano < $ano) {
            return -1;
        } else { //Anos são iguais, comparar meses
            if ($this->mes > $mes) {
                return 1;
            } elseif ($this->mes < $mes) {
                return -1;
            } else { //Meses são iguais, comparar dias
                if ($this->dia > $dia) {
                    return 1;
                } elseif ($this->dia < $dia) {
                    return -1;
                } else {
                    return 0; //As datas são iguais
                }
            }
        }
    }
} 

$d1 = new Data();
echo "Novo objeto Data criado com sucesso!<br>";
$d1->setDia(10); 
$d1->setMes(7); 
$d1->setAno(1999);
echo $d1->retornarData() . "<br>";
echo $d1->ehAnoBissexto() . "<br>";
echo $d1->compararDatas(9, 7, 1999) . "<br>";
echo $d1->compararDatas(10, 7, 1999) . "<br>";
echo $d1->compararDatas(11, 7, 1999) . "<br><br>";

$d2 = new Data(21, 8, 2024);
echo "Novo objeto Data criado com sucesso!<br>";

$d2->incrementarDia();
$d2->decrementarDia();
echo $d2->retornarData() . "<br>";
echo $d2->ehAnoBissexto() . "<br>";
echo $d2->subtrairData(10, 07, 1999) . "<br>";

?>