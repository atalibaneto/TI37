<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas Pesquisa de Campo - Podologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Respostas Pesquisa de Campo - Podologia e Saúde</h2>

        <?php 
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // verifica o método
            if (isset($_POST['q1'])) { // verifica se a variável está vazia
                $resposta1 = $_POST['q1'];
                echo "<strong>Qual a sua faixa de idade?</strong><br>";
                if ($resposta1 == '15a25') {
                    echo "De 15 a 25 anos";
                } elseif ($resposta1 == '25a45') {
                    echo "De 25 a 45 anos";
                } elseif ($resposta1 == '45mais') {
                    echo "Mais de 45 anos";
                }
            }
            if (isset($_POST['q2'])) { // verifica se a variável está vazia
                $resposta2 = $_POST['q2'];
                echo "<br><br><strong>Qual seu gênero?</strong><br>";
                if ($resposta2 == 'masc') {
                    echo "Masculino";
                } elseif ($resposta2 == 'fem') {
                    echo "Feminino";
                } elseif ($resposta2 == 'outros') {
                    echo "Outros";
                }
            }
            if (isset($_POST['q3'])) { // verifica se a variável está vazia
                $resposta3 = $_POST['q3'];
                echo "<br><br><strong>Você possui Diabetes e/ou Pressão Alta?</strong><br>";
                if ($resposta3 == 'diabetes') {
                    echo "Sim, tenho Diabetes";
                } elseif ($resposta3 == 'pressao') {
                    echo "Sim, tenho Pressão Alta";
                } elseif ($resposta3 == 'dia/pressao') {
                    echo "Sim, possuo Diabetes e Pressão Alta";
                } elseif ($resposta3 == 'nenhum') {
                    echo "Não, não possuo nenhum dos dois";
                }
            }
        } else {
            echo "<div class=\"alert alert-warning\"><p>O formulário não foi enviado.</p></div>";
        }
        ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>