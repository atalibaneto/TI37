<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="processa_form2.php" method="post">
            <label for="interesses">Selecione a sua área de interesse</label><br>
            <select name="interesses[]" id="interesses" multiple>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Esportes">Esportes</option>
                <option value="Música">Música</option>
                <option value="Viagens">Viagens</option>
            </select><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>