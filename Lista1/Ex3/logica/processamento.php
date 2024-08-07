<?php

    if(!empty($_POST["valorVenda"]) && (!empty($_POST["porcentagemLucro"]))){
        $valorVenda = $_POST["valorVenda"];
        $porcentagemLucro = $_POST["porcentagemLucro"];

        $valorCusto = ($porcentagemLucro / 100) * $valorVenda;

        echo "O valor do preço de custo do produto é: $valorCusto";
    }

?>