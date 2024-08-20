<?php

    session_start();

    $resultado = '';
    if(isset($_SESSION['resultado'])){
        $resultado = $_SESSION['resultado'];
        unset($_SESSION['resultado']);
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="POST" action="logica/processamento.php">
        <label for="baseTriangulo">Insira o valor da base do Triangulo</label>
        <input type="text" id="baseTriangulo" name="baseTriangulo">
        <label for="baseTriangulo">Insira o valor da altura do Triangulo</label>
        <input type="text" id="alturaTriangulo" name="alturaTriangulo">
        <input type="submit" id="botao" value="Calcular">
        <?php if ($resultado): ?>
            <p>Resultado: <?php echo htmlspecialchars($resultado); ?></p>
        <?php endif; ?>
    </form>

</body>
</html>