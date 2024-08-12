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
    <title>Preço de custo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="POST" action="logica/processamento.php">
        <label for="valorVenda">Insira o valor de venda do produto</label>
        <input type="number" name="valorVenda" id="valorVenda">
        <label for="porcentagemLucro">Insira a porcentagem de lucro do produto</label>
        <input type="number" name="porcentagemLucro" id="porcentagemLucro">
        <input type="submit" id="botao" value="calcular">
        <?php if ($resultado): ?>
            <p>Resultado: R$ <?php echo htmlspecialchars($resultado); ?></p>
        <?php endif; ?>
    </form>

</body>
</html>