<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>
<body>
    <?php
        function mostrarTraco() {
            $traco =  "<br>=============================================";
            echo $traco."<br>";
        }

        echo "<h2>Exemplos com while</h2>";
        $i = 1;
        while($i <= 10)
            {
                //echo $i." | ";
                echo $i.($i != 10 ? " | " : "");
                $i++;
            }
        mostrarTraco();
        $i = 1;
        while ($i <= 65468745645231)
            {
                if ($i == 3216) break;
                    echo $i." | ";
                    $i++;
            }
        mostrarTraco();
        echo "<h2>Exemplo de do..while</h2>";
        echo "<p>O do..while é um loop de repetição que executa um bloco de código pelo menos 
        uma vez antes de testar a condição.</p>";
        $i = 1;
        do {
            echo $i." | ";
            $i++;
        } while ($i <= 10);
        // Exemplo com break
        mostrarTraco();
        $i = 1;
        do {
            if ($i == 3) break;
            echo $i." | ";
            $i++;
        } while ($i <= 6);
        mostrarTraco();
        echo "<h2>Operadores de comparação</h2>";
        echo "<h3>== Igual<br>
                 != Diferente<br>
                 === Idêntico<br>
                 !== Não Idêntico<br>
                 > Maior que<br>
                 < Menor que<br>
                 >= Maior ou igual<br>
                 <= Menor ou igual</h3>";
        $x = 5;
        $y = 0;
        echo "Os valores das variáveis x e y são x = <strong>".$x."</strong> e y = <strong>".$y."</strong>";
        echo "<br><strong>== Igual</strong><br>";
        var_dump($x == $y);
        echo "<br><strong>!= Diferente</strong><br>";
        var_dump($x != $y);
        echo "<br><strong>=== Idêntico</strong><br>";
        var_dump($x === $y);
        echo "<br><strong>!== Não Idêntico</strong><br>";
        var_dump($x !== $y);
        echo "<br><strong>> Maior que</strong><br>";
        var_dump($x > $y);
        echo "<br><strong>< Menor que</strong><br>";
        var_dump($x < $y);
        echo "<br><strong>>= Maior ou igual</strong><br>";
        var_dump($x >= $y);
        echo "<br><strong><= Menor ou igual</strong><br>";
        var_dump($x <= $y);
        mostrarTraco();
        echo "<h2>Inserir caracteres unicode</h2>";
        // https://unicode.org/emoji/charts/full-emoji-list.html
        echo "\u{263A}";
        echo "<br>";
        echo "👌";
        echo "<br>";
        echo "🎂";
        echo "<br>";
        echo "=)";
        echo "<br>";
        echo "\u{1F47E}";
        mostrarTraco();
        echo "<h2>Operadores Lógicos</h2>";
        echo "<p><strong>&& (E)</strong></p><br>";
        $a = true;
        $b = true;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a && $b);
        echo "<br>";
        $a = true;
        $b = false;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a && $b);
        echo "<br>";
        $a = false;
        $b = true;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a && $b);
        echo "<br>";
        $a = false;
        $b = false;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a && $b);

        echo "<p><strong>|| (OU)</strong></p><br>";
        $a = true;
        $b = true;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a || $b);
        echo "<br>";
        $a = true;
        $b = false;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a || $b);
        echo "<br>";
        $a = false;
        $b = true;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a || $b);
        echo "<br>";
        $a = false;
        $b = false;
        echo var_export($a,true)." ".var_export($b,true)." -> ";
        var_dump($a || $b);
        echo "<br><h2>Exemplo</h2>";
        $num1 = 5;
        $num2 = 10;
        if (($num1 > 5) && ($num2 < 11)) {
            echo "";
        } else {
            echo "<br>Uma das condições é falsa";
        }
        if (($num1 > 5) || ($num2 < 11)) {
            echo "<br>Uma das condições é verdadeira";
        } else {
            echo "";
        }
        mostrarTraco();
        echo "<h2>Função para gerar números aleatórios</h2>";
        echo "<br>".rand(1,100);
        echo "<br>".rand();
        mostrarTraco();
        echo "<h2>Outras funções em PHP</h2>";
        echo "<p><strong>abs() - Valor absoluto</p>";
        $num1 = 5;
        $num2 = 10;
        echo abs($num1 -= $num2);
        echo "<p><strong>base_convert()</strong> - Conversor de base entre números</p>";
        $binario = "1111";
        echo $decimal = base_convert($binario, 2, 10);
        echo "<p><strong>ceil()</strong> - Arredondar para cima</p>";
        $arredondarCima = 3.2;
        echo ceil($arredondarCima);
        echo "<p><strong>floor()</strong> - Arredondar para baixo</p>";
        $arredondarBaixo = 3.9;
        echo floor($arredondarBaixo);
        echo "<p><strong>round()</strong> - Arredondar</p>";
        $arredondar = 3.14159;
        echo round($arredondar)."<br>";
        echo round($arredondar,2);
        echo "<p><strong>hypot()</strong> - Achar a hipotenusa entre doi catetos</p>";
        echo hypot(6, 8);
        echo "<p><strong>intdiv()</strong> - Divisão de inteiros</p>";
        echo intdiv(10, 5);
        echo "<p><strong>sqrt()</strong> - Raíz Quadrada</p>";
        $raizquadrada = 256;
        echo sqrt($raizquadrada);
        

    ?>
</body>
</html>