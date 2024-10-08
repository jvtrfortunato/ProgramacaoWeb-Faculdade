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
    <title>Soma dos digitos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="POST" action="logica/processamento.php">
        <label for="numero">Insira um número para calcular a soma de seus digitos</label>
        <input type="text" id="numero" name="numero">
        <input type="submit" id="botao" value="calcular">
        <?php if ($resultado): ?>
            <p>Resultado: <?php echo htmlspecialchars($resultado); ?></p>
        <?php endif; ?>
    </form>

</body>
</html>