<?php

    require_once 'funcoesCalculo.php';

    if(!empty($_POST["numero"])){
        $numero = $_POST["numero"];
        $soma = somaDigitos($numero);

        echo "A soma dos algarismos de $numero é $soma.";
    }

?>