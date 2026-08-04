<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <?php 

        echo "<p>Seja bem-vindo! <strong>".$_GET['nome']."</strong><br>
        O e-mail digitado foi ".$_GET['email']."</p>";
    
    ?>
</body>
</html>