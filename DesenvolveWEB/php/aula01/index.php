<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Olá mundo</title>
</head>
<body>
  <h1>  
<?php
    /* Comentários */
    //echo "Olá Mundo!";

    $texto = "<h1>Sou aluno da TI37 no Senac de Botucatu</h1>";
    echo $texto;

    $traco = "<br>=================================================<br>";
    echo $traco;

    $nome = "Chaves";
    $sobrenome = "del Ocho";
    echo "Olá, meu nome é <strong>$nome</strong> e meu sobrenome é 
    <strong>$sobrenome</strong>";
    echo $traco;
    /* Ex.1 - Crie um script PHP que declare três variáveis: $nome, $idade e $cidade.
    Atribua valores a essas variávei e exiba uma mensagem que combine estes valores.*/
    $nome = "Ataliba";
    $idade = "29";
    $cidade = "Botucatu";
    echo "Meu nome é $nome, tenho $idade anos de CNH e moro em $cidade";
    echo $traco;
    /* 
    Operações Aritméticas no PHP:
    Soma:           +
    Subtração       -
    Multiplicação   *
    Divisão         /
    */

    $numero1 = 56;
    $numero2 = 44;

    $soma = $numero1 + $numero2;
    echo "A soma entre $numero1 e $numero2 é igual a $soma";

    echo $traco;

    /* Ex.2 - Crie um script PHP que declare duas variáveis numéricas, $num1 e $num2.
    Realize as 4 operações aritméticas e exiba os resultados. */
    $num1 = 7252;
    $num2 = 98;
    $adicao = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 / $num2;
    echo "A soma entre os números é: $adicao<br>";
    echo "A subtração entre os números é: $subtracao<br>";
    echo "A multiplicação entre os números é: $multiplicacao<br>";
    echo "A divisão entre os números é: $divisao";
    echo $traco;

    /* Ex.3 - Crie um script PHP que declare duas variáveis de string, $primeiroNome e 
    $segundoNome. Concatene essas variáveis para formar o nome completo e exiba o
    resultado*/
    $primeiroNome = "Maria";
    $segundoNome = "do Bairro";

    $nomeCompleto = $primeiroNome."&nbsp;".$segundoNome;
    echo $nomeCompleto;
    echo $traco;
    $num1 = 7252;
    $num2 = 98;
    echo "A soma entre os valores é: ".$num1 += $num2; //$num1 = $num1 + $num2
    echo "<br>";
    $num1 = 7252;
    echo "A subtração entre os valores é: ".$num1 -= $num2;
    echo "<br>";
    $num1 = 7252;
    echo "A multiplicação entre os valores é: ".$num1 *= $num2;
    echo "<br>";
    $num1 = 7252;
    echo "A divisão entro os valores é: ".$num1 /= $num2;
    echo $traco;



?>
</h1>

</body>
</html>