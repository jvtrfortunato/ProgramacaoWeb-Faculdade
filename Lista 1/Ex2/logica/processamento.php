<?php

    session_start();

    require_once 'funcoesCalculo.php';

    if(!empty($_POST["numero"])){
        $numero = $_POST["numero"];
        $soma = somaDigitos($numero);

        $_SESSION['resultado'] = $soma;
    }

    header('Location: ../index.php');
    exit();

?>