<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <?php
        function mostrarTraco() {
            $traco =  "<br>=============================================";
            echo $traco."<br>";
        }
        echo "<h2>Tabuada do 7 utilizando for</h2>";
        $num = 7;
        for ($i = 0; $i <= 10; $i++) {
            echo $num." x ".$i." = ".$num * $i."<br>";
        }
        mostrarTraco();
        echo "<h2>Foreach</h2><p>Estrutura de repetição (loop) projetada 
        especificamente para <strong>percorrer arrays e objetos.</strong>
        É a forma mais simples e legível de iterar sobre todos os elementos
        de uma coleção.</p>";
        /*
        SINTAXE

        foreach ($array as $valor) {
            instrução
        }
        
        */
        $carros = array("Fusca", "Brasília", "Kombi", "Uno com escada no teto", "Fiat 147");
        var_dump($carros);
        echo "<br>";
        foreach ($carros as $x) {
            echo $x."<br>";
        }
        echo "<h2>Foreach com array associativo</h2>";
        $alunos = array (
            "João" => 8.5,
            "Maria" => 9.0,
            "Pedro" => 7.5,
            "Ana" => 10.0,
            "Carlos" => 6.0
        );
        foreach($alunos as $nome => $nota) {
            echo $nome." tirou a nota: ".$nota."<br>";
        }
    ?>
    <br><br><a href="formulario.html">Formulário</a>
</body>
</html>