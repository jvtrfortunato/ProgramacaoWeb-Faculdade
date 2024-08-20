<?php

    session_start();

    $pesoLimite = 50;
    $valorMultaPor5kg = 4;

    if(!empty($_POST["pesoPeixe"])){
        $pesoPeixe = $_POST["pesoPeixe"];
        $excesso = $pesoPeixe - $pesoLimite;
        
        if($excesso < 0){
            $string = "Valor da multa: R$ 0,00";
            $_SESSION['resultado'] = $string;
        }

        else{
            $multa = ceil($excesso / 5) * $valorMultaPor5kg;
            $string = "Valor da multa: R$ {$multa}";
            $_SESSION['resultado'] = $string;
        }

        
    }

    header('Location: ../index.php');
    exit();

?>