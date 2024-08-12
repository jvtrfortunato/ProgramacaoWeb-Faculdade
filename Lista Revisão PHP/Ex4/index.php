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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="logica/processamento.php" method="post">
        <label for="pesoPeixe">Insira o peso do peixe em Kg</label>
        <input type="text" name="pesoPeixe" id="pesoPeixe">
        <input type="submit" name="botao" id="botao" value="Calcular">
        <?php if ($resultado): ?>
            <p>Resultado: <?php echo htmlspecialchars($resultado); ?></p>
        <?php endif; ?>
    </form>

</body>
</html>