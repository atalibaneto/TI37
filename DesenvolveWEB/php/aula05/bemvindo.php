<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <?php 

        //var_dump($_POST;
        echo "<p>Seja bem-vindo! <strong>".$_POST['nome']."</strong><br>
        O e-mail digitado foi ".$_POST['email']."</p>";
        echo "<br>";

        /* A $_REQUEST é uma SUPERGLOBAL do PHP que contém dados enviados por GET, POST e COOKIE combinados em um único array assicuativo.*/

        // Exemplo de variáveis $_POST enviadas de um formulário
        
        echo "<p>Seja bem-vindo! <strong>".$_REQUEST['nome']."</strong><br>
        O e-mail digitado foi ".$_REQUEST['email']."</p>";

    ?>
</body>
</html>