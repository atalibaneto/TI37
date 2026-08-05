<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $cidade = $_POST['cidade'];
                echo "<h2>Você escolheu a cidade: </h2>";

                switch ($cidade) {
                    case 'sp':
                        echo "<strong>São Paulo</strong>";
                        break;
                    case 'rj':
                        echo "<strong>Rio de Janeiro</strong>";
                        break;
                    case 'bh':
                        echo "<strong>Belo Horizonte</strong>";
                        break;
                    case 'poa':
                        echo "<strong>Porto Alegre</strong>";
                        break;
                    case 'par':
                        echo "<strong>Pardinho</strong>";
                        break;
                    case 'ita':
                        echo "<strong>Itating</strong>";
                        break;
                    case 'bof':
                        echo "<strong>Bofete</strong>";
                        break;
                    default:
                        echo "<strong>Cidade não encontrada</strong>";
                        break;
                    
                }
            }
        
        ?>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>