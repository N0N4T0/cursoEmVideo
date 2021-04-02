<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoEmVideo.com </title>
</head>
<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2014 - $ano;
    echo "Quem nasceu em $ano tem $idade anos";

    $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NAO OBRIGATORIO";
    echo "<br>E dessa forma seu voto é $tipo";

    ?>
</body>
</html>

<!-- 
    IV) Operadores de Atribuição
    Adição -------- $a = $a + b ----------- $a += $b
    Subtração ----- $a = $a - b ----------- $a -= $b
    Multiplicação - $a = $a * b ----------- $a *= $b
    Divisão ------- $a = $a / b ----------- $a /= $b
    Módulo -------- $a = $a % b ----------- $a %= $b
    Concatenação -- $a = $a.b ------------- $a .= $b

    $preco = $_GET["p"];
    echo "O preço do produto é R$ $preco";

    // $preco = $preco + ($preco * 10/100);
    $preco += $preco * 10/100;
    echo "<br> O novo preço com 10% de aumento será R$ " .number_format($preco, 2, ",");

    $preco -= $preco * 10/100;
    echo "<br> O novo preço com 10% de desconto será R$ " .number_format($preco, 2, ",");



    Operadores de Incremento
    Pré-incremento ------ $a = $a + 1 --------- ++$a
    Pós-incremento ------ $a = $a + 1 --------- $a++
    Pré-decremento ------ $a = $a - 1 --------- --$a
    Pós-decremento ------ $a = $a - 1 --------- $a--

    $atual = $_GET["aa"];
    echo "O ano atual é $atual e o ano anterior é " .--$atual;


    Comentários
    Inline ----------- // ou #
    Multline --------- /* */


    Referência entre variáveis
    - É quando uma variável assume o mesmo valor da outra
    $a = 3;
    $b = &$a; //b e a tem valor igual a 3
    $b += 5; //b e a tem valor igual a 8
    echo $a; //b e a tem valor igual a 8

    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br> A variavel B vale $b";


    Variáveis de variáveis ou Variáveis variantes
    $x = "abc";
    $$x = "def";
    echo "O conteudo da variavel X é <strong>$x</strong>";
    echo "<br> A variavel ABC criada recebeu o valor <strong>$abc</strong>"; 



    Operadores Relacionais
    Maior -------------- $a>$b
    Menor -------------- $a>$b
    Maior ou igual ----- $a >= $b
    Menor ou igual ----- $a <= $b
    Diferente ---------- $a <> $b ------ $a != $b
    Igual -------------- $a == $b
    Idêntico ----------- $a === $b (do mesmo tipo e igual)

    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "SIM" : "NAO";
    echo "As variáveis A e B são iguais? $r"


    Operador Ternário
    expressão ? verdadeiro : falso

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    echo "Os valores passados foram $n1 e $n2 <br>";
    
    $r = ($tipo === "s") ? $n1+$n2 : $n1*$n2;
    echo "O resultado será $r"


    $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        
        echo "A media entre $nota1 e $nota2 é $m <br>";

        $sit = ($m<6) ? "Reprovado" : "Aprovado";
        echo "A situação do aluno é $sit"



    Operadores Lógicos
    $ano = $_GET["an"];
    $idade = 2014 - $ano;
    echo "Quem nasceu em $ano tem $idade anos";

    $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NAO OBRIGATORIO";
    echo "<br>E dessa forma seu voto é $tipo";

 -->