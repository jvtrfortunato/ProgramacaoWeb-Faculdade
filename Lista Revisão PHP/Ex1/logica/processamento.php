<?php
  
    session_start();
  
    //Área do Circulo 
    if (!empty($_POST["raioCirculo"])){

        $raioCirculo = $_POST["raioCirculo"];
        $area = pi() * pow($raioCirculo, 2);
        $resultadoFormatado = number_format($area, 1, ',', '.');
        $_SESSION['resultado'] = $resultadoFormatado;
        header('Location: ../circulo.php');
        exit();

    }

    //Área do Triangulo
    if (!empty($_POST["baseTriangulo"]) && !empty($_POST["alturaTriangulo"])){

        $baseTriangulo = $_POST["baseTriangulo"];
        $alturaTriangulo = $_POST["alturaTriangulo"];
        $area = ($baseTriangulo * $alturaTriangulo) / 2;
        $resultadoFormatado = number_format($area, 1, ',', '.');
        $_SESSION['resultado'] = $resultadoFormatado;
        header('Location: ../triangulo.php');
        exit();

    }

    //Área do Quadrado
    if (!empty($_POST["baseQuadrado"]) && !empty($_POST["alturaQuadrado"])){

        $baseQuadrado = $_POST["baseQuadrado"];
        $alturaQuadrado = $_POST["alturaQuadrado"];
        $area = $baseQuadrado * $alturaQuadrado;
        $resultadoFormatado = number_format($area, 1, ',', '.');
        $_SESSION['resultado'] = $resultadoFormatado;
        header('Location: ../quadrado.php');
        exit();

    }

    //Área do Retangulo  
    if (!empty($_POST["baseRetangulo"]) && !empty($_POST["alturaRetangulo"])){

        $baseRetangulo = $_POST["baseRetangulo"];
        $alturaRetangulo = $_POST["alturaRetangulo"];
        $area = $baseRetangulo * $alturaRetangulo;
        $resultadoFormatado = number_format($area, 1, ',', '.');
        $_SESSION['resultado'] = $resultadoFormatado;
        header('Location: ../retangulo.php');
        exit();

    }

?>