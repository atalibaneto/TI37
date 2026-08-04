<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <h1>Formulário utilizando a SUPERGLOBAL $_SERVER - PHP_SELF</h1>
    <h2>Soma de 2 números</h2>

    <?php 
    //operador de colescência nula

    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
     
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        <label for"v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?php echo $valor1; ?>"><br><br>
        <label for"v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?php echo $valor2; ?>"><br><br>
        <input type="submit" value="Somar">
    </form>

    <h2>Resultado da Soma</h2>

    <?php 
        $soma = $valor1 + $valor2;
        echo "<p>A soma entre os valor $valor1 e $valor2 é <strong>$soma</strong></p>";
    
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</body>
</html>