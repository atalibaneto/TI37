<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05</title>
</head>
<body>
    <h2>Prencha o formulário com seu nome e e-mail</h2>

    <form action="bemvindo.php" method="post">
        <label>
            Nome: <input type="text" name="nome" placeholder="Digite seu nome"><br><br>
        </label>
        <label>
            e-mail: <input type="email" name="email" placeholder="Digite seu e-mail">
        </label>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>