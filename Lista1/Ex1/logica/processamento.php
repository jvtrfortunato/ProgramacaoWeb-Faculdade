<?php

    require_once 'funcoesCalculo.php';
    
    //Área do Circulo
    $raioCirculo = "";
    
    if (!empty($_POST["raioCirculo"])){

        $raioCirculo = $_POST["raioCirculo"];

        $area = areaCirculo($raioCirculo);

    }

    //Área do Quadrado
    $baseQuadrado = "";
    $alturaQuadrado = "";
    
    if (!empty($_POST["baseQuadrado"]) && !empty($_POST["alturaQuadrado"])){

        $baseQuadrado = $_POST["baseQuadrado"];
        $alturaQuadrado = $_POST["alturaQuadrado"];

        $area = areaQuadrado($baseQuadrado, $alturaQuadrado);

    }

    //Área do Retangulo
    $baseRetangulo = "";
    $alturaRetangulo = "";
    
    if (!empty($_POST["baseRetangulo"]) && !empty($_POST["alturaRetangulo"])){

        $baseRetangulo = $_POST["baseRetangulo"];
        $alturaRetangulo = $_POST["alturaRetangulo"];

        $area = areaRetangulo($baseRetangulo, $alturaRetangulo);

    }

    //Área do Triangulo
    $baseTriangulo = "";
    $alturaTriangulo = "";
    
    if (!empty($_POST["baseTriangulo"]) && !empty($_POST["alturaTriangulo"])){

        $baseTriangulo = $_POST["baseTriangulo"];
        $alturaTriangulo = $_POST["alturaTriangulo"];

        $area = areaTriangulo($baseTriangulo, $alturaTriangulo);

    }

    echo "RESULTADO: " . $area;

?>