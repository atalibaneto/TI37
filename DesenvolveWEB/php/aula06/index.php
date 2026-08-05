<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="processa_form1.php" method="post">
            <label for="cidade">Escolha sua cidade:</label>
            <select name="cidade" id="cidade">
                <option value="sp">São Paulo</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="bh">Belo Horizonte</option>
                <option value="poa">Porto Alegre</option>
                <option value="par">Pardinho</option>
                <option value="ita">Itatinga</option>
                <option value="bof">Bofete</option>
            </select>
            <p><button type="submit" class="btn btn-primary">Enviar</button></p>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>