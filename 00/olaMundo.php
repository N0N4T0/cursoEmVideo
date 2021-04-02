<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo PHP</title>

    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>
    <div>
    <h1>Testando php</h1>
    <?php
        echo"Hello World";
    ?>
    </div>
</body>
</html>

<!-- 
    I)
    echo, porém pode ser print ou printf

    II)
    $idade = 14;
    $nome = "Seu nome";
    // echo $nome. " tem ". $idade. " anos";
    echo "$nome tem $idade anos"

    III)
    $n1 = 1;
        $n2 = 2;
        $adicao = $n1 + $n2;
        $subtracao = $n1 - $n2;
        $multiplicacao = $n1 * $n2;
        $divisao = $n1 / $n2;
        $resto = $n1 % $n2;

        $media = ($n1 + $n2)/2;

        echo "A soma de $n1 + $n2 = $adicao <br>
            A subtração de $n1 - $n2 = $subtracao <br>
            A multiplicação de $n1 * $n2 = $multiplicacao <br>
            A divisão de $n1 / $n2 = $divisao <br>
            O resto da divisão de $n1 % $n2 = $resto <br> <br>
            A media de $n1 + $n2 = $media
        "
-->