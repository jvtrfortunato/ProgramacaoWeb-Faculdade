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
    <title>Circulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="POST" action="logica/processamento.php">
        <label for="raioCirculo">Insira o valor do raio do circulo</label>
        <input type="text" id="raioCirculo" name="raioCirculo">
        <input type="submit" id="botao" value="Calcular">
        <?php if ($resultado): ?>
            <p>Resultado: <?php echo htmlspecialchars($resultado); ?></p>
        <?php endif; ?>
    </form>

</body>
</html>