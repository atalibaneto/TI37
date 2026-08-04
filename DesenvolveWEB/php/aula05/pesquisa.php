<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Pesquisa de campo - Podologia e Saúde</h2>

<p>Responda as questões a seguir com a seguinte escala:</p>
    <ol>
        <li>Totalmente insatisfeito(a)</li>
        <li>Insatisfeito(a)</li>
        <li>Regular</li>
        <li>Satisfeito(a)</li>
        <li>Totalmente satisfeito(a)</li>
    </ol>

    <form action="processa_form1.php" method="post">
        <div class="d-grid gap-3">
            <div class="border border-3 rounded p-3">
                <h4>Qual a sua faixa de idade?</h4>
                <input type="radio" name="q1" value="15a25">De 15 a 25 anos<br>
                <input type="radio" name="q1" value="25a45">De 25 a 45 anos<br>
                <input type="radio" name="q1" value="45mais">Mais de 45 anos
            </div>
            <div class="border border-3 rounded p-3">
                <h4>Qual seu gênero?</h4>
                <input type="radio" name="q2" value="masc">Masculino<br>
                <input type="radio" name="q2" value="fem">Feminino<br>
                <input type="radio" name="q2" value="outros">Outros
            </div>
            <div class="border border-3 rounded p-3">
                <h4>Você possui Diabetes e/ou Pressão Alta?</h4>
                <input type="radio" name="q3" value="diabetes">Sim, tenho Diabetes<br>
                <input type="radio" name="q3" value="pressao">Sim, tenho Pressão Alta<br>
                <input type="radio" name="q3" value="dia/pressao">Sim, possuo Diabetes e Pressão Alta<br>
                <input type="radio" name="q3" value="nenhum">Não, não possuo nenhum dos dois
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>