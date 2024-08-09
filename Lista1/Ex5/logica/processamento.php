<?php

    if(!empty($_POST["valorEmprestimo"]) 
    && !empty($_POST["porcentJuro"])
    && !empty($_POST["qtdParcelas"])){
        
        $valorEmprestimo = $_POST["valorEmprestimo"];
        $porcentJuro = $_POST["porcentJuro"];
        $qtdParcelas = $_POST["qtdParcelas"];
        
        $parcela = $valorEmprestimo * (($porcentJuro / 100) * ((1 + $porcentJuro / 100) ** $qtdParcelas) / ((1 + $porcentJuro / 100) ** $qtdParcelas - 1));

        $parcelaFormatada = number_format($parcela, 2, ',', '.');

        echo "Valor da parcela: R$ $parcelaFormatada";
    }

?>