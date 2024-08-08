<?php

    $pesoLimite = 50;
    $valorMultaPor5kg = 4;

    if(!empty($_POST["pesoPeixe"])){
        $pesoPeixe = $_POST["pesoPeixe"];
        $excesso = $pesoPeixe - $pesoLimite;
        
        if($excesso < 0){
            echo "Valor da multa: R$ 0,00";
        }

        else{
            $multa = ceil($excesso / 5) * $valorMultaPor5kg;
            echo "Valor da multa: R$ {$multa}";
        }
    }

?>