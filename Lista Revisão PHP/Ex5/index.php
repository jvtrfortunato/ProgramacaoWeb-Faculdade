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
    <title>PRICE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="logica/processamento.php" method="post">
        <label for="valorEmprestimo">Insira o valor do empréstimo</label>
        <input type="text" name="valorEmprestimo" id="valorEmprestimo"><br><br>
        <label for="porcentJuro">Insira a porcentagem do juro</label>
        <input type="text" name="porcentJuro" id="porcentJuro"><br><br>
        <label for="qtdParcelas">Insira o número de meses</label>
        <input type="text" name="qtdParcelas" id="qtdParcelas"><br><br>
        <input type="submit" name="botao" id="botao" value="Calcular">
        <?php if ($resultado): ?>
            <p>Resultado: R$ <?php echo htmlspecialchars($resultado); ?></p>
        <?php endif; ?>
    </form>

</body>
</html>