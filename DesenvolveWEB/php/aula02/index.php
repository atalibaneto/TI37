<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h2>Exemplos de incremento e decremento</h2>";
        $numero = 10;
        echo "O valor da variável: $numero<br>";
        $numero++;
        echo "O valor da variável após o incremento: $numero<br>";
        $numero--;
        echo "O valor da variável após o decremento: $numero<br>";
        $traco =  "=============================================";
        echo $traco;
        
        echo "<br><strong>Exemplo de troca de valores com variáveis</strong><br>";
        $a = 10;
        $b = 20;

        echo "Valores originais: a = $a, b = $b<br>";

        $a += $b;
        $b = $a - $b;
        $a -= $b;

        echo "Valores trocados: a = $a, b = $b<br>";
        echo $traco;

        echo "<br><strong>Exemplo de operador matemático de potenciação</strong><br>";
        $base = 2;
        $expoente = 3;
        $potencia = $base ** $expoente;
        echo "$base elevado a $expoente é: $potencia";

        echo "<br>";
        echo $traco;

        echo "<h2>Obtendo os tipos de dados com var_dump()</h2>";
        $x = 5;
        $x = 10.365;
        $x = "Hello World!";
        var_dump($x);

        echo "<br>";
        echo $traco;

        echo "<h2>Constantes</h2>";
        echo "As constantes em PHP podem começar com uma letra ou underline, mas não tem o sinal $
        antes de seu nome.<br>Para criar uma constante utilizamos a função <strong>define()</strong>
        <br>";
        define("CONSTANTE", "Olá Mundo!!!");
        echo CONSTANTE;
        echo "<br>";
        echo $traco;
        echo "<br>";
        define("ANIMAIS",array('cachorro', 'gato', 'pássaro', 'peixe'));
        echo ANIMAIS[1]."<br>";
        echo ANIMAIS[3]."<br>";
        var_dump(ANIMAIS);
        echo "<br>";
        echo $traco;
        echo "<h2>Exemplos de desvio condicional (if/else/elseif)</h2>";
        $divisor = 20;
        $quociente = 2;
        $resto = $divisor % $quociente;

        if ($resto == 0) {
            echo "O número $divisor é par<br>";
        } else {
            echo "O número $divisor é ímpar<br>";
        }

        $num = 30;
        if ($num < 20) {
            echo "O número $num é menor que 20";
        } elseif ($num > 20) {
            echo "O número $num é maior que 20";
        } else {
            echo "O número $num é igual a 20";
        }
    ?>
</body>
</html>