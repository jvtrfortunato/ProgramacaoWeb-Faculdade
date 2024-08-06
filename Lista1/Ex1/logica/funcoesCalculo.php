<?php

    function areaCirculo($raio){
        $area = pi() * pow($raio, 2);
        return($area);
    }

    function areaTriangulo($base, $altura){
        $area = ($base * $altura) / 2;
        return($area);
    }

    function areaQuadrado($base, $altura){
        $area = $base * $altura;
        return($area);
    }

    function areaRetangulo($base, $altura){
        $area = $base * $altura;
        return($area);
    }

?>