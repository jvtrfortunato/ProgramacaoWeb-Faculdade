<?php

    session_start();

    if(!empty($_POST["valorVenda"]) && (!empty($_POST["porcentagemLucro"]))){
        $valorVenda = $_POST["valorVenda"];
        $porcentagemLucro = $_POST["porcentagemLucro"];
        $valorCusto = ($porcentagemLucro / 100) * $valorVenda;
        $resultadoFormatado = number_format($valorCusto, 2, ',', '.');

        $_SESSION['resultado'] = $resultadoFormatado;
    }

    header('Location: ../index.php');
    exit();

?>