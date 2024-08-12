<?php

    function somaDigitos($numero){
        $digitos = str_split($numero);
        $soma = 0;

        foreach ($digitos as $digito){
            if (is_numeric($digito)){
                $soma += $digito;
            }
        }

        return $soma;
    }
?>